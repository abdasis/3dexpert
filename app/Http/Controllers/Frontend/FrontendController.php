<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('welcome')->with([
            'courses' => $courses
        ]);
    }

    public function kelas()
    {
        $courses = Course::all();
        return view('frontend.pages.kelas')->with([
            'courses' => $courses
        ]);
    }

    public function rincianKelas(Request $request)
    {
        $statusOrder = Order::where('status', 'AKTIF')->where('user_id', Auth::user()->id)->first();
        $nama_kelas  = $request->get('nama_kelas');
        $level_kelas = $request->get('level_kelas');
        $course = Course::where('nama_kelas', $nama_kelas)->where('level_kelas', $level_kelas)->first();
        if (empty($course)) {
            abort(404, 'Tidak ada kelas yang tersedia');
        }else{
            $materis = $course->materis;
            return view('frontend.pages.rincian-kelas')->withCourse($course)->withMateris($materis)->withStatus($statusOrder);
        }
    }

    public function pembayaran()
    {
        return view('frontend.pages.pembayaran');
    }

    public function profile()
    {
        $order = Order::where('user_id', Auth::user()->id)->first();
        $kelas = $order->courses;
        if (empty($kelas)) {
            alert()->warning('Maaf!!!', 'Belum ada kelas yang dibeli');
            return redirect()->route('kelas');
        }
        return view('frontend.pages.kelas-saya')->withCourses($kelas);
    }

    public function kelasSaya()
    {
        $order = Order::where('user_id', Auth::user()->id)->first();
        $kelas = $order->courses;
        if (empty($kelas)) {
            alert()->warning('Maaf!!!', 'Belum ada kelas yang dibeli');
            return redirect()->route('kelas');
        }
        return view('frontend.pages.kelas-saya')->withCourses($kelas);


    }
}
