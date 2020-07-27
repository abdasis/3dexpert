@extends('layouts.app-dark');


@section('content')
    <div class="">
        <img src="{{ asset('thumbnail-kelas') . '/' . $kelas->thumbnail }}" height="800px" alt="" class="img-responsive img-banner">
    </div>
    <div class="container-fluid mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-12" style="margin-bottom: 70px">
                <div class="card-box p-3" style="margin-top: -170px; box-shadow: 0 0 10px 10px #61616179">
                    <h1 style="color: #1B2E75" class="mb-4 font-weight-bolder">{{ $kelas->nama_kelas }}</h1>
                    <div class="diskripsi-kelas">
                        {!! $kelas->diskripsi_kelas !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <h1 class="text-center text-expert" style="font-size: 45px; margin-bottom: 70px;">Pilih Level Kelasmu</h1>
                <a href="{{ route('kelas.rincian', ['kelas' => $kelas->nama_kelas, 'level' => 'Basic']) }}">
                    <button class="btn p-2 mb-4 btn-lg btn-block btn-outline-expert rounded-14 font-26 font-weight-bolder"> {{ $kelas->nama_kelas }} Basic Class</button>
                </a>
                <a href="{{ route('kelas.rincian', ['kelas' => $kelas->nama_kelas, 'level' => 'Intermediate']) }}">
                    <button class="btn  mb-4 btn-lg btn-block btn-outline-expert rounded-14 font-26 font-weight-bolder">{{ $kelas->nama_kelas}} Intermediate Class</button>
                </a>
                <a href="{{ route('kelas.rincian', ['kelas' => $kelas->nama_kelas, 'level' => 'Expert']) }}">
                    <button class="btn  mb-4 btn-lg btn-block btn-outline-expert rounded-14 font-26 font-weight-bolder"> {{ $kelas->nama_kelas}} Expert Class</button>
                </a>
            </div>
            <div class="col-md-12" style="margin-top: 90px;">
                <h1 class="text-center text-expert" style="font-size: 50px;">Kuasai Skill Baru Hari Ini !</h1>
            </div>
        </div>
    </div>
@endsection
