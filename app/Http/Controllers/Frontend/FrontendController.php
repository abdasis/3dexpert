<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
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
        $nama_kelas  = $request->get('nama_kelas');
        $level_kelas = $request->get('level_kelas');
        $course = Course::where('nama_kelas', $nama_kelas)->where('level_kelas', $level_kelas)->first();
        if (empty($course)) {
            abort(404, 'Tidak ada kelas yang tersedia');
        }else{
            $materis = $course->materis;
            return view('frontend.pages.rincian-kelas')->withCourse($course)->withMateris($materis);
        }
    }

    public function pembayaran()
    {
        return view('frontend.pages.pembayaran');
    }

    public function profile()
    {
        return view('frontend.pages.profile');
    }
}
