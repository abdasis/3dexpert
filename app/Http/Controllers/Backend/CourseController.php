<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use League\CommonMark\Inline\Element\Code;
use RealRashid\SweetAlert\Facades\Alert;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(function($request, $next){
            if (Gate::allows('admin-access')) {
                return $next($request);
            }
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    public function index()
    {
        $courses = Course::all();
        return view('backend.pages.courses.index')->withCourses($courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        $courses = new Course();
        $courses->nama_kelas = $request->get('nama_kelas');
        $courses->diskripsi_kelas = $request->get('diskripsi_kelas');
        $courses->nama_pengajar = $request->get('nama_pengajar');
        $courses->harga_kelas = $request->get('harga_kelas');
        $courses->rating_kelas = $request->get('rating_kelas');
        $courses->level_kelas = $request->get('level_kelas');
        $courses->kategori_kelas = $request->get('kategori_kelas');
        if ($request->hasFile('trailer')) {
            $trailer = $request->file('trailer');
            $trailer_name = date('dmyhs-') . Str::slug($request->get('nama_kelas'), '-') . '.' . $trailer->getClientOriginalExtension();
            $trailer->move(public_path('trailer-kelas'), $trailer_name);
            $courses->trailer = $trailer_name;
        } else {
            $courses->trailer = 'trailer-default.jpg';
        }

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnail_name = date('dmyhs-') . Str::slug($request->get('nama_kelas'), '-') . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('thumbnail-kelas'), $thumbnail_name);
            $courses->thumbnail = $thumbnail_name;
        } else {
            $courses->thumbnail = 'thumbnail-default.jpg';
        }
        $courses->save();
        if ($courses == false) {
            if ($courses->trailer && file_exists(public_path('gambar-trailer') . $courses->trailer)) {
                File::delete(public_path('gambar-trailer'), $courses->trailer);
            }
        }
        alert()->success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        return view('backend.pages.courses.edit')->withCourse($course);
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
        $courses = Course::find($id);
        $courses->nama_kelas = $request->get('nama_kelas');
        $courses->diskripsi_kelas = $request->get('diskripsi_kelas');
        $courses->nama_pengajar = $request->get('nama_pengajar');
        $courses->harga_kelas = $request->get('harga_kelas');
        $courses->rating_kelas = $request->get('rating_kelas');
        $courses->kategori_kelas = $request->get('kategori_kelas');
        $courses->level_kelas = $request->get('level_kelas');
        if ($request->hasFile('trailer')) {
            if ($courses->trailer && file_exists(public_path('gambar-trailer') . $courses->trailer)) {
                File::delete(public_path('gambar-trailer'), $courses->trailer);
            }
            $trailer = $request->file('trailer');
            $trailer_name = date('dmyhs-') . Str::slug($request->get('nama_kelas'), '-') . '.' . $trailer->getClientOriginalExtension();
            $trailer->move(public_path('trailer-kelas'), $trailer_name);
            $courses->trailer = $trailer_name;
        } else {
            $courses->trailer = $courses->trailer;
        }

        if ($request->hasFile('thumbnail')) {
            if ($courses->trailer && file_exists(public_path('thumbnail-kelas') . $courses->trailer)) {
                File::delete(public_path('thumbnail-kelas'), $courses->trailer);
            }
            $thumbnail = $request->file('thumbnail');
            $thumbnail_name = date('dmyhs-') . Str::slug($request->get('nama_kelas'), '-') . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('thumbnail-kelas'), $thumbnail_name);
            $courses->thumbnail = $thumbnail_name;
        } else {
            $courses->thumbnail = $courses->thumbnail;
        }
        $courses->save();
        alert()->success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->back()->withStatus('Data data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return "Kelas Berhasil Dihapus";
    }

    public function Dashboard()
    {
        return view('backend.index');
    }
}
