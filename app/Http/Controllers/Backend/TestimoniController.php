<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class TestimoniController extends Controller
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
    public function create($nama_kelas)
    {
        return view('backend.pages.testimoni.create')->withKelas($nama_kelas);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = Course::where('nama_kelas', $request->get('nama_kelas'))->first();
        $testimoni = new Testimoni();
        $testimoni->nama_peserta = $request->get('nama_peserta');
        $testimoni->nama_kampus = $request->get('asal_kampus');
        $testimoni->isi_testimoni = $request->get('isi_testimoni');
        if ($request->hasFile('foto_peserta')) {
            $gambar = $request->file('foto_peserta');
            $nama_gambar = date('dmYhs-') . Str::slug($request->get('nama_peserta'), '-') . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('foto-peserta'), $nama_gambar);
            $testimoni->foto_peserta = $nama_gambar;
        }
        $testimoni->course_id = $course->id;
        $testimoni->save();
        if ($testimoni) {
            Session::flash('status', 'Data testimoni berhasil di tambahkan');
            return redirect()->back();
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
        $testimoni = Testimoni::find($id);
        return view('backend.pages.testimoni.edit')->withTestimoni($testimoni);
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
        $course = Course::where('nama_kelas', $request->get('nama_kelas'))->first();
        $testimoni = new Testimoni();
        $testimoni->nama_peserta = $request->get('nama_peserta');
        $testimoni->asal_kampus = $request->get('asal_kampus');
        $testimoni->isi_testimoni = $request->get('isi_testimoni');
        if ($request->hasFile('foto_peserta')) {
            if ($testimoni->foto_peserta && file_exists(public_path('foto-peserta') . '/' . $testimoni->foto_peserta)) {
                File::delete(public_path('foto-peserta') . '/' . $testimoni->foto_peserta);
            }
            $gambar = $request->file('foto_peserta');
            $nama_gambar = date('dmYhs-') . Str::slug($request->get('nama_peserta'), '-') . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('foto-peserta', $nama_gambar));
            $testimoni->foto_peserta = $nama_gambar;
        }
        $testimoni->course_id = $course->id;
        $testimoni->save();
        if ($testimoni) {
            Session::flash('status', 'Data testimoni berhasil diupdate');
            return redirect()->back();
        }
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
