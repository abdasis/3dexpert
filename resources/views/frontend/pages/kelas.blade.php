@extends('layouts.app')

@section('content')
<div class="container-fluid mt-100">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="text-center mb-4 pb-1">
                <h3 class="mb-3">Pilih Kelasmu</h3>
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
                    <div class="dropdown-menu w-100 dropdown-box" id="level-kelas" aria-labelledby="dropdownMenu2">
                        @foreach (App\Models\Course::where('kategori_kelas', 'Mechanical Design')->get() as $course)
                            <a class="link-kelas" href="{{ route('kelas.rincian', ['nama_kelas' => $course->nama_kelas, 'level_kelas' => 'Pemula']) }}">
                                {{ $course->nama_kelas }}                            </a>
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
                    <div class="dropdown-menu w-100 dropdown-box" id="level-kelas" aria-labelledby="dropdownMenu2">
                        @foreach (App\Models\Course::where('kategori_kelas', 'Architecture Design')->get() as $course)
                            <a class="link-kelas" href="{{ route('kelas.rincian', ['nama_kelas' => $course->nama_kelas, 'level_kelas' => 'Pemula']) }}">
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
                    <div class="dropdown-menu w-100 dropdown-box" id="level-kelas" aria-labelledby="dropdownMenu2">
                        @foreach (App\Models\Course::where('kategori_kelas', 'Rendering And Animation')->get() as $course)
                            <a class="link-kelas" href="{{ route('kelas.rincian', ['nama_kelas' => $course->nama_kelas, 'level_kelas' => 'Pemula']) }}">
                                <button class="dropdown-item" type="button">{{ $course->nama_kelas }}</button>
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
                            <h4 class="mb-2 text-white"> Mechanical Design </h4>
                        </div>
                    </div>
                    <div class="dropdown-menu w-100 dropdown-box"  id="level-kelas" aria-labelledby="dropdownMenu2">
                        @foreach (App\Models\Course::where('kategori_kelas', 'Rencana Anggaran Biaya')->get() as $course)
                            <a class="link-kelas" href="{{ route('kelas.rincian', ['nama_kelas' => $course->nama_kelas, 'level_kelas' => 'Pemula']) }}">
                                {{ $course->nama_kelas }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
