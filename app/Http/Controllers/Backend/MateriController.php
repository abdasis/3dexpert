<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MateriController extends Controller
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
        return view('backend.pages.materi.create')->withKelas($nama_kelas);
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
        if ($request->hasFile('video_materi')) {
            $video = $request->file('video_materi');
            $video_name = date('dmyhs-') . Str::slug($request->get('nama_materi'), '-') . '.' . $video->getClientOriginalExtension();
            $video->move(public_path('galeri-materi'), $video_name);
        }else{
            $video_name = 'default-video.mp4';
        }
        $tambahCourse = $course->materis()->create([
            'judul_materi' => $request->get('nama_materi'),
            'diskripsi_materi' => $request->get('diskripsi_materi'),
            'video_materi' => $video_name,
            'ebook_materi' => 'default-ebook.pdf',
            'durasi_materi' => '1 Jam 2 Menit',
        ]);

        if ($tambahCourse) {
            return 'Berhasil disimpan';
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
