<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Klien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class KlienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Klien::all();
        return view('backend.pages.clients.index')->withClients($clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Klien();

        $client->nama_kampus = $request->get('nama_kampus');
        if ($request->hasFile('logo_kampus')) {
            $gambar = $request->file('logo_kampus');
            $nama_gambar = Str::slug($request->get('nama_kampus'), '-');
            $gambar->move(public_path('logo-kampus'), $nama_gambar);
            $client->logo_kampus = $nama_gambar;
        }
        $client->save();
        if ($client) {
            Session::flash('status', 'Satu klien berhasil di tambah');
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
        $client = Klien::find($id);
        return view('backend.pages.clients.show')->withClient($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Klien::find($id);
        return view('backend.pages.clients.edit')->withClient($client);
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
        $client = Klien::find($id);
        $client->nama_kampus = $request->get('nama_kampus');
        if ($request->hasFile('logo_kampus')) {
            if ($client->logo_kampus && file_exists(public_path('logo-kampus') . '/' . $client->logo_kampus)) {
                File::delete(public_path('logo-kampus') . '/' . $client->logo_kampus);
            }
            $gambar = $request->file('logo_kampus');
            $nama_gambar = Str::slug($request->get('nama_kampus'), '-');
            $gambar->move(public_path('logo-kampus'), $nama_gambar);
            $client->logo_kampus = $nama_gambar;
        }
        $client->save();
        if ($client) {
            Session::flash('status', 'Satu klien berhasil di tambah');
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
        $client = Klien::find($id);
        $client->delete();
        if ($client) {
            Session::flash('status', 'Data klien berhasil di hapus');
            return redirect()->back();
        }
    }
}
