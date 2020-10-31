@extends('layouts.app-dark')
@section('content')
<div class="container-fluid mt-100 mb-100">
    <div class="row mb-5">
        @auth
            @if (empty($cekOrder))
            <div class="col-md-8">
                <div class="container">
                    <video id="player"  controls data-poster="{{ asset('thumbnail-materi') . '/'. $course->thumbnail_kelas }}">
                        <source src="{{ asset('trailer-kelas') .'/' . $course->trailer }}" type="video/mp4" />
                    </video>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
               <div class="container">
                <h3 class="nama-kelas text-expert">{{ $course->nama_kelas . ' ' . $course->level_kelas }}</h3>
                <p class="font-16 text-white">20 Video Pembelajaran (3 Jam 40 Menit)</p>
                <p class="font-18 text-white"><b>Rating</b></p>
                <p>
                    @foreach (range(1, $course->rating_kelas) as $rating)
                        <i class="fa fa-star text-warning"></i>
                    @endforeach
                </p>
                <h4 class="harga-asli text-expert"><strike>Rp. {{ $course->harga_coret }}/Kelas</strike></h4>
                <h3 class="harga-diskon text-expert text-white">Rp. {{ $course->harga_kelas }}</h3>
                <p class="font-16 text-white">( 20 Chapter + Ebook )</p>
                <a href="{{ Auth::check() ? route('order.create', ['kelas' => $course->nama_kelas, 'token' => csrf_token()]) : route('login') }}" target="{{ !Auth::check() ? 'blank' : '' }}">
                    <button class="btn btn-danger btn-block py-2" style="background: #E80C27; border-radius: 15px">Beli Sekarang</button>
                </a>
               </div>
            </div>
            @else
            <div class="col-lg-12 col-sm-12">
                <h2 class="text-expert">Trailer Kelas</h2>
                <video id="player"  controls data-poster="/path/to/poster.jpg">
                    <source src="{{ asset('trailer-kelas') .'/' . $course->trailer }}" type="video/mp4" />
                </video>
            </div>
            @endif
        @endauth

        @guest
        <div class="col-lg-8 col-sm-12">
            <h2 class="text-expert">Trailer Kelas</h2>
            <video id="player"  controls data-poster="{{ asset('thumbnail-materi') . '/'. $course->thumbnail_kelas }}">
                <source src="{{ asset('trailer-kelas') .'/' . $course->trailer }}" type="video/mp4" />
            </video>
        </div>
        <div class="col-md-4">
            <div class="container mt-5">
                <h2 class="nama-kelas text-expert">{{ $course->nama_kelas . ' ' . $course->level_kelas }} </h2>
            <p class="font-16 text-white">{{ $course->jumlah_video }}</p>
            <p class="font-18 text-white mt-3"><b>Rating</b></p>
            <p>
                @foreach (range(1, $course->rating_kelas) as $rating)
                    <i class="fa fa-star text-warning"></i>
                @endforeach
            </p>
            <h2 class="harga-asli text-white mt-2 mb-2"><strike>Rp. {{ $course->harga_coret }}/Kelas</strike></h2>
            <h1 class="harga-diskon text-expert mb-4 text-expert" style="font-size: 45px;">Rp. {{ $course->harga_kelas }}</h1>
            <p class="font-16 text-white">( 20 Chapter + Ebook )</p>
            <a href="{{ Auth::check() ? route('order.create', ['level_kelas' => $course->level_kelas, 'kelas' => $course->nama_kelas, 'token' => csrf_token()]) : route('login') }}" target="{{ !Auth::check() ? 'blank' : '' }}">
                <button class="btn btn-danger btn-block py-2" style="background: #E80C27; border-radius: 15px">Beli Sekarang</button>
            </a>
        </div>
            </div>
        @endguest
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="diskripsi-kelas text-white">
                {!! $course->diskripsi_kelas !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12  mb-3 mt-3">
            <h2 class="text-expert">Kurikulum</h2>
        </div>
        <div class="col-md-12">
        @foreach ($materis as $materi)
        <div class="accordion b-radius mb-2" id="accordion{{ $materi->id }}" >
            <div class="card-silabus bg-black border-expert b-radius ">
                <div class="card-header bg-black b-radius" id="heading{{ $materi->id }}">
                    <h4 class="text-left text-white" type="button" data-toggle="collapse" data-target="#collapse{{ $materi->id }}" aria-expanded="true" aria-controls="collapse{{ $materi->id }}">
                        <i class="fa fa-plus-circle"></i> {{ $materi->judul_materi }}
                    </h4>
                    <p>{!! $materi->diskripsi_materi !!}</p>
                </div>
                <div id="collapse{{ $materi->id }}" class="collapse text-white" aria-labelledby="heading{{ $materi->id }}" data-parent="#accordion{{ $materi->id }}">
                    <div class="card-body pt-0 pb-2">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row mb-3">
                                            <div class="col-md-5">

                                                @if (App\Models\Order::where('status', 'AKTIF')->where('user_id', Auth::user()->id)->first())
                                                <a href="{{ route('kelas.video', ['kelas' => $course->nama_kelas, 'materi' => $materi->judul_materi]) }}">
                                                    <img class="w-100 img-fit" src="{{ asset('thumbnail-materi') . '/' . $materi->thumbnail_materi }}" alt="">
                                                </a>
                                                @else
                                                <img class="w-100 img-fit" src="{{ asset('thumbnail-materi') . '/' . $materi->thumbnail_materi }}" alt="">
                                                @endif
                                            </div>
                                            <div class="col-md-7">
                                                <p class="font-16 font-weight-bold">Video Pembelajaran</p>
                                                <p class="font-16 text-expert font-weight-bold">{{ $materi->durasi_materi }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                            <img class="w-100 img-fit" height="80" src="{{ asset('frontend/assets/images/icons/pdf.png') }}" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <p class="font-16 font-weight-bold">Ebook</p>
                                                <p class="font-16 text-expert font-weight-bold">Download PDF</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                            <img class="w-100 img-fit" height="80" src="{{ asset('frontend/assets/images/icons/pdf.png') }}" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <p class="font-16 font-weight-bold">Ebook</p>
                                                <p class="font-16 text-expert font-weight-bold">Download PDF</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="accordion b-radius mb-2" id="accordionUpload" >
            <div class="card-silabus bg-black border-expert b-radius ">
                <div class="card-header bg-black b-radius" id="headingUpload">
                    <h4 class="text-left text-white" type="button" data-toggle="collapse" data-target="#collapseUpload" aria-expanded="true" aria-controls="collapseUpload">
                        <i class="fa fa-plus-circle"></i> Upload Tugas
                    </h4>
                    <p>Upload Tugas</p>
                </div>
                <div id="collapseUpload" class="collapse text-white" aria-labelledby="headingUpload" data-parent="#accordionUpload">
                    <div class="card-body pt-0 pb-2">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row mb-3">
                                            <div class="col-md-5">
                                            {{-- <img class="w-100 img-fit" src="{{ asset('thumbnail-materi') . '/' . $materi->thumbnail_materi }}" alt=""> --}}
                                            </div>
                                            {{-- <div class="col-md-7">
                                                <p class="font-16 font-weight-bold">upload Tugas</p>
                                                <p class="font-16 text-expert font-weight-bold">{{ $materi->durasi_materi }}</p>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                            <img class="w-100 img-fit" height="80" src="{{ asset('frontend/assets/images/icons/pdf.png') }}" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <p class="font-16 font-weight-bold">Upload Tugas</p>
                                                <p class="font-16 text-expert font-weight-bold">Kirim Tugas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                            <img class="w-100 img-fit" height="80" src="{{ asset('frontend/assets/images/icons/pdf.png') }}" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <p class="font-16 font-weight-bold">Sertifikat</p>
                                                <p class="font-16 text-expert font-weight-bold">Download Sertifikat</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <a href="https://facebook.com">
                <button class="btn btn-danger btn-block"><i class="fa fa-shopping-basket mr-1"></i>Beli Kelas</button>
            </a>
        </div>
        </div>
    </div>

    <section class="testimoni mt-100">
        <div class="row justify-content-center slider-testi">
            <div class="col-md-8">
                @foreach ($testimonis->take(1) as $testimoni)
                <div class="testi-box mt-4">
                    <div class="card bg-black border-expert-50">
                        <div class="card-img-top">
                            <img src="{{ asset('/foto-peserta') . '/' . $testimoni->foto_peserta}}" class="img-circle img-fluid mx-auto d-block foto-peserta" width="80px" alt="">
                        </div>
                        <div class="card-body">
                            <h4 class="text-center text-white">{{ $testimoni->nama_peserta }}</h4>
                            <p class="text-center text-white">{{ $testimoni->nama_kampus }}</p>
                            <div class="card-text text-center text-white">
                                {{ $testimoni->isi_testimoni }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>

@endsection
