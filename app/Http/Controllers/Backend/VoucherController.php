<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\VoucherRequest;
use App\Models\Course;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vouchers = Voucher::all();
        return view('backend.pages.vouchers.index')->withVouchers($vouchers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('backend.pages.vouchers.create')->withCourses($courses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VoucherRequest $request)
    {
        // dd($request->all());
        try {
            DB::beginTransaction();
            $course = Course::find($request->get('course_id'));

            $voucher = new Voucher();
            $voucher->nama = $request->get('nama');
            $voucher->kode = $request->get('kode');
            $voucher->expire_date = $request->get('expire_date');
            $voucher->status = $request->get('status_voucher');
            $voucher->kuota = $request->get('kuota');
            $voucher->total_diskon = $request->get('total_diskon');
            $voucher->catatan = $request->get('catatan');
            $course->voucher()->save($voucher);
            DB::commit();
            return "berhasil disimpan";
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->withInput();
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
        //
    }
}
