@extends('layouts.app-dark');


@section('content')
    <div class="">
        <img src="{{ asset('thumbnail-kelas') . '/' . $kelas->thumbnail }}" alt="" class="img-responsive img-banner img-fluid">
    </div>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-box p-3">
                    <h2 style="color: #1B2E75">{{ $kelas->nama_kelas }}</h2>
                    <p>
                        {!! $kelas->diskripsi_kelas !!}
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <h1 class="text-center text-expert">Pilih Kelas Mu</h1>
                <a href="{{ route('kelas.rincian', ['kelas' => $kelas->nama_kelas, 'level' => 'Pemula']) }}">
                    <button class="btn  mb-2 btn-lg btn-block btn-outline-blue btn-rounded">Basic Class</button>
                </a>
                <a href="{{ route('kelas.rincian', ['kelas' => $kelas->nama_kelas, 'level' => 'Intermediate']) }}">
                    <button class="btn  mb-2 btn-lg btn-block btn-outline-blue btn-rounded">Intermediate Class</button>
                </a>
                <a href="{{ route('kelas.rincian', ['kelas' => $kelas->nama_kelas, 'level' => 'Expert']) }}">
                    <button class="btn  mb-2 btn-lg btn-block btn-outline-blue btn-rounded">Expert Class</button>
                </a>
            </div>
            <div class="col-md-12 mt-4">
                <h1 class="text-center text-white">Kuasai Skill Satu Hari Ini</h1>

            </div>
        </div>
    </div>
@endsection
