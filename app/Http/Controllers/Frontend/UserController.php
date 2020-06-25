<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Biodata;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user = User::find($id);
        $biodata = $user->biodata;
        return view('frontend.pages.update-profile')->withUser($user)->withBiodata($biodata);
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
        $user = User::find($id);
        $biodata = Biodata::where('user_id', Auth::user()->id)->first();
        if (empty($biodata)) {
            $newBiodata = new Biodata();
            $newBiodata->universitas = $request->get('universitas');
            $newBiodata->jenis_kelamin = $request->get('jenis_kelamin');
            $newBiodata->alamat_lengkap = $request->get('alamat_lengkap');
            $newBiodata->biodata = $request->get('biodata');
            $user->biodata()->save($newBiodata);
            Session::flash('status', 'Data Berhasil Diupdate');
            return redirect()->back();
        }else{
            $biodata->universitas = $request->get('universitas');
            $biodata->jenis_kelamin = $request->get('jenis_kelamin');
            $biodata->alamat_lengkap = $request->get('alamat_lengkap');
            $biodata->biodata = $request->get('biodata');
            $user->biodata()->save($biodata);
            Session::flash('status', 'Data Berhasil Diupdate');
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
