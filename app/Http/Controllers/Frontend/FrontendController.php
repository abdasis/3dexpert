<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function kelas()
    {
        return view('frontend.pages.kelas');
    }

    public function rincianKelas()
    {
        return view('frontend.pages.rincian-kelas');
    }

    public function pembayaran()
    {
        return view('frontend.pages.pembayaran');
    }
}
