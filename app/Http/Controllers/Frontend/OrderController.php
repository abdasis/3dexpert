<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $user = User::find(Auth::user()->id);
        $kelas = Course::where('nama_kelas', $request->get('kelas'))->first();
        return view('frontend.pages.orders.create')->withUser($user)->withKelas($kelas);
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
        $diorder = Order::where('status', 'BELUM')
        ->where('user_id', Auth::user()->id)->first();
        if (!empty($diorder)) {
            alert()->warning('Maaf','Selesaikan dulu pembayaran sebelumnya');
            return redirect()->route('order.invoice');
        }
        $orderKelas = new Order();
        $orderKelas->user_id = Auth::user()->id;
        $orderKelas->total_price = $kelas->harga_kelas;
        $orderKelas->invoice_number = rand(1, null) . date('ysmd');
        $orderKelas->status = 'BELUM';
        $orderKelas->save();
        $couserOrder = Order::find($orderKelas->id);
        $kelas->orders()->attach($couserOrder, ['quantity'=> '1']);
        return redirect()->route('order.invoice');
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
        //
    }

    public function invoice()
    {
        $user = User::find(Auth::user()->id);
        $order = Order::where('user_id', $user->id)
        ->where('status', 'BELUM')
        ->first();
        if (!empty($order)) {
            return view('frontend.pages.pembayaran')->withOrder($order);
        }else{
            alert()->warning('Opppss', 'Anda belum memiliki pembelian kursus');
            return redirect()->route('kelas');
        }
    }

}
