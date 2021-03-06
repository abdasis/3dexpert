@extends('layouts.app')
@section('content')
<section class="bg-b-decor">
    <div class="container-fluid py-100">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-4 pb-1">
                    <h1 class="mb-3 mt-4 font-weight-bolder text-dark-blue" style="font-size: 40px">Pilih  Kelasmu</h1>
                </div>
            </div>
        </div>
        <div class="row " style="margin-bottom: 300px">

            <div class="col-lg-3">
                <div class="card shadow rounded-14 dropdown" style="background: #00A859">
                    <div class="card-img-top">
                        <img class="w-100 tumbnail-gambar-kelas rounded-top-right-14 rounded-top-left-14" src="{{ asset('thumbnail-kelas') .'/'  . 'mechanical-design.png' }}" alt="">
                    </div>
                    <div class="card-body">
                        <div class="course-text dropdown-toggle"  type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="card-text">
                                <h4 class="mb-2 text-white"> Mechanical Design </h4>
                            </div>
                        </div>
                        <div class="dropdown-menu rounded-14 w-100 dropdown-box" id="level-kelas" aria-labelledby="dropdownMenu2">
                            @foreach (App\Models\Course::where('kategori_kelas', 'Mechanical Design')->get()->unique('nama_kelas') as $course)
                                <a class="link-kelas" href="{{ route('kelas.tentang-kelas', ['kelas' => $course->nama_kelas]) }}">
                                    {{ $course->nama_kelas }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card shadow rounded-14 dropdown" style="background: #00A859">
                    <div class="card-img-top">
                        <img class="w-100 tumbnail-gambar-kelas rounded-top-right-14 rounded-top-left-14" src="{{ asset('thumbnail-kelas') .'/'  . 'architecture.png' }}" alt="">
                    </div>
                    <div class="card-body">
                        <div class="course-text dropdown-toggle"  type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="card-text">
                                <h4 class="mb-2 text-white"> Architecture Design </h4>
                            </div>
                        </div>
                        <div class="dropdown-menu rounded-14 w-100 dropdown-box" id="level-kelas" aria-labelledby="dropdownMenu2">
                            @foreach (App\Models\Course::where('kategori_kelas', 'Architecture Design')->get()->unique('nama_kelas') as $course)
                                <a class="link-kelas" href="{{ route('kelas.tentang-kelas', ['kelas' => $course->nama_kelas]) }}">
                                    {{ $course->nama_kelas }}                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card shadow rounded-14 dropdown" style="background: #00A859">
                    <div class="card-img-top">
                        <img class="w-100 tumbnail-gambar-kelas rounded-top-right-14 rounded-top-left-14" src="{{ asset('thumbnail-kelas') .'/'  . 'rendering.png' }}" alt="">
                    </div>
                    <div class="card-body">
                        <div class="course-text dropdown-toggle"  type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="card-text">
                                <h4 class="mb-2 text-white"> Rendering And Animation </h4>
                            </div>
                        </div>
                        <div class="dropdown-menu rounded-14 w-100 dropdown-box" id="level-kelas" aria-labelledby="dropdownMenu2">
                            @foreach (App\Models\Course::where('kategori_kelas', 'Rendering And Animation')->get()->unique('nama_kelas') as $course)
                                <a class="link-kelas" href="{{ route('kelas.tentang-kelas', ['kelas' => $course->nama_kelas]) }}">
                                    {{ $course->nama_kelas }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card shadow rounded-14 dropdown" style="background: #00A859">
                    <div class="card-img-top">
                        <img class="w-100 tumbnail-gambar-kelas rounded-top-right-14 rounded-top-left-14 rounded-top-right-14 rounded-top-left-14" src="{{ asset('thumbnail-kelas') .'/'  . 'rencana-anggaran-biaya.png' }}" alt="">
                    </div>
                    <div class="card-body">
                        <div class="course-text dropdown-toggle"  type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="card-text">
                                <h4 class="mb-2 text-white"> Rencana Anggaran Biaya </h4>
                            </div>
                        </div>
                        <div class="dropdown-menu rounded-14 w-100 dropdown-box"  id="level-kelas" aria-labelledby="dropdownMenu2">
                            @foreach (App\Models\Course::where('kategori_kelas', 'Rencana Anggaran Biaya')->get()->unique('nama_kelas') as $course)
                                <a class="link-kelas" href="{{ route('kelas.tentang-kelas', ['kelas' => $course->nama_kelas]) }}">
                                    {{ $course->nama_kelas }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
