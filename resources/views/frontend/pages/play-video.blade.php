@extends('layouts.app-dark')


@section('content')
<div class="container-fluid mt-100 mb-100">
    <div class="row">
        <div class="col-md-10 border-white" >
            <div class="container">
                <h4 class="text-expert">Materi Kelas | {{ $course->nama_kelas }}</h4>
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" src="{{  asset('galeri-materi') . '/' . $putar->video_materi}}" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p class="diskripsi-kelas">
                {!! $putar->diskripsi_materi !!}
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            @foreach ($materis as $materi)
            <div class="accordion b-radius mb-2" id="accordion{{ $materi->id }}" >
                <div class="card-silabus bg-black border-expert b-radius ">
                    <div class="card-header bg-black b-radius" id="heading{{ $materi->id }}">
                        <h4 class="text-left text-white" type="button" data-toggle="collapse" data-target="#collapse{{ $materi->id }}" aria-expanded="true" aria-controls="collapse{{ $materi->id }}">
                            <i class="fa fa-plus-circle"></i> {{ $materi->judul_materi }}
                        </h4>
                    </div>
                    <div id="collapse{{ $materi->id }}" class="collapse text-white" aria-labelledby="heading{{ $materi->id }}" data-parent="#accordion{{ $materi->id }}">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="container">
                                        <a href="{{ route('kelas.video', ['kelas' => $course->nama_kelas, 'materi' =>$materi->judul_materi]) }}">
                                            <img width="180" src="{{ asset('thumbnail-materi') . '/' . $materi->thumbnail_materi }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    {!! $materi->diskripsi_materi !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="mt-5">
                <a href="https://facebook.com">
                    <button class="btn btn-danger btn-block"><i class="fa fa-shopping-basket mr-1"></i>Beli Kelas</button>
                </a>
            </div>
        </div>
    </div>

    <section class="testimoni mt-100">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="testi-box mt-4">
                    <div class="card bg-black border-expert-50">
                        <div class="card-img-top">
                            <img src="{{ asset('/frontend/assets/images/peserta/ADINDA.png') }}" class="img-circle img-fluid mx-auto d-block foto-peserta" width="80px" alt="">
                        </div>
                        <div class="card-body">
                            <h4 class="text-center text-white">Adinda</h4>
                            <p class="text-center text-white">Universitas Trunojoyo Madura</p>
                            <div class="card-text text-center text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quod id doloribus veritatis

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
