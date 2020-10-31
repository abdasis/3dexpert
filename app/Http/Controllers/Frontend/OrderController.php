<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\KelasDibayar;
use App\Mail\KelasDibeli;
use App\Models\Course;
use App\Models\Order;
use App\Models\Voucher;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->get('voucher')) {
            $user = User::find(Auth::user()->id);
            $kelas = Course::where('nama_kelas', $request->get('kelas'))->where('level_kelas', $request->get('level'))->first();
            $voucher = Voucher::where('kode', $request->get('voucher'))
            ->where('status', 'active')
            ->first();
            if ($voucher) {
                if ($kelas->id === $voucher->course_id) {
                    $diskon = Voucher::has('course')->first();
                    Session::flash('diskon', 'Selamat anda mendapatkan diskon');
                }else{
                    Alert::warning('Maaf', 'Tidak ada diskon yang tersedia');
                    return redirect()->back();
                }
            }else{
                Alert::warning('maaf', 'tidak ada diskon yang tersedia');
                return redirect()->back();
            }
            return view('frontend.pages.orders.create')->withUser($user)->withKelas($kelas)->withDiskon($diskon);
        }else{
            $user = User::find(Auth::user()->id);
            $kelas = Course::where('nama_kelas', $request->get('kelas'))->where('level_kelas', $request->get('level'))->first();
            return view('frontend.pages.orders.create')->withUser($user)->withKelas($kelas);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $kelas = Course::where('nama_kelas', $request->get('kelas'))->first();
        $diorder = Order::leftJoin('course_order', 'course_order.order_id', '=', 'orders.id')
                ->select('course_order.*')
                ->where('course_id', $kelas->id)
                ->where('user_id', Auth::user()->id)
                ->get();
        if ($diorder->count() > 0) {
            alert()->warning('Maaf', 'Kelas ini menunggu pembayaran, silahkan klik bayar sekarang');
            return redirect()->route('order.invoice');
        }else {
            $orderKelas = new Order();
            $orderKelas->user_id = Auth::user()->id;
            $orderKelas->total_price = $request->get('total_harga');
            $orderKelas->invoice_number = rand(1, null) . date('ysmd');
            $orderKelas->status = 'BELUM';
            $orderKelas->save();
            $couserOrder = Order::find($orderKelas->id);
            $kelas->orders()->attach($couserOrder, ['quantity'=> '1']);

            $pembeli = User::find(Auth::user()->id);
            Mail::to('3dexpert.cad@gmail.com')->send(new KelasDibeli($kelas, $pembeli));
            return redirect()->route('order.invoice');
        }




    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        Session::flash('status', 'Orderan berhasil dihapus');
        return redirect()->back();
    }

    public function invoice()
    {
        $user = User::find(Auth::user()->id);
        $order = Order::where('user_id', $user->id)->with('courses')
        ->orderBy('created_at', 'DESC')
        ->get();
        if (!empty($order)) {
            return view('frontend.pages.pembayaran')->withOrders($order);
        }else{
            alert()->warning('Opppss', 'Anda belum memiliki pembelian kursus');
            return redirect()->route('kelas');
        }
    }


    public function uploadBukti(Request $request)
    {
        $course = Course::where('nama_kelas', $request->nama_kelas)
        ->first();
        $order = Order::find($request->order_id);
        return view('frontend.pages.orders.upload_bukti')->withOrder($order);
    }

    public function storeBukti(Request $request)
    {
        $order =  Order::where('invoice_number', $request->invoice_number)->first();
        $updateOrder = Order::find($order->id);
        if ($request->hasFile('foto_bukti')) {
            $gambar = $request->file('foto_bukti');
            $nama_gambar = $request->get('invoice_number') . '-' . $order->user_id . '.'. $gambar->getClientOriginalExtension();
            $path = $gambar->move(public_path('foto_bukti'), $nama_gambar);
            $updateOrder->status = "MENUNGGU KONFIRMASI";
        }
        $updateOrder->save();
        Session::flash('status', 'Pembayaran telah diterima, tunggu beberapa kami segera verifikasi kelas yang ada beli');
        Mail::to('3dexpert.cad@gmail.com')->send(new KelasDibayar($order, $path));
        return redirect()->route('order.invoice');
    }


}
