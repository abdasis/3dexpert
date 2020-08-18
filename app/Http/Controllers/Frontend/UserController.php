<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Biodata;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

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
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->universitas = $request->get('universitas');
        $user->roles = json_encode(['PESERTA']);
        $user->phone = $request->get('phone');
        $user->save();
        alert()->success('Mantap', 'Pendaftaran berhasil dilakukan');
        return redirect()->route('profile');
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

        return view('frontend.pages.update-profile')->withUser($user);
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
        $biodata = User::find($id);
        if (empty($biodata)) {
            $newBiodata = new User();
            $newBiodata->universitas = $request->get('universitas');
            $newBiodata->jenis_kelamin = $request->get('jenis_kelamin');
            $newBiodata->alamat_lengkap = $request->get('alamat_lengkap');
            $newBiodata->biodata = $request->get('biodata');
            $newBiodata->phone = $request->get('phone');
            $newBiodata->save();
            Session::flash('status', 'Data Berhasil Diupdate');
            return redirect()->back();
        }else{
            $biodata->universitas = $request->get('universitas');
            $biodata->jenis_kelamin = $request->get('jenis_kelamin');
            $biodata->alamat_lengkap = $request->get('alamat_lengkap');
            $biodata->biodata = $request->get('biodata');
            $biodata->phone = $request->get('phone');
            $biodata->save();
            Session::flash('status', 'Data Berhasil Diupdate');
            return redirect()->route('profile', $biodata->id);;
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
