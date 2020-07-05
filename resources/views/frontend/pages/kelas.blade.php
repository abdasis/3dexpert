@extends('layouts.app')

@section('content')
<div class="container-fluid mt-100">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="text-center mb-4 pb-1">
                <h3 class="mb-3">KURSUS TERBARU</h3>
                <p class="text-muted">Dapatkan kursus-kursus terbaru dari kami</p>
            </div>
        </div>
    </div>
    <div class="row mb-100">

        <div class="col-lg-3">
            <div class="card shadow rounded-sm p-2 dropdown">
                <div class="card-img-top">
                    <img class="w-100 tumbnail-gambar-kelas" src="{{ asset('thumbnail-kelas') .'/'  . 'mechanical-design.png' }}" alt="">
                </div>
                <div class="course-text dropdown-toggle"  type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="card-text">
                        <h4 class="mb-2 "> Mechanical Design </h4>
                    </div>
                </div>
                <div class="dropdown-menu w-100" id="level-kelas" aria-labelledby="dropdownMenu2">
                    @foreach (App\Models\Course::where('kategori_kelas', 'Mechanical Design')->get() as $course)
                        <a href="{{ route('kelas.rincian', ['nama_kelas' => $course->nama_kelas, 'level_kelas' => 'Pemula']) }}">
                            <button class="dropdown-item" type="button">{{ $course->nama_kelas }}</button>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card shadow rounded-sm p-2 dropdown">
                <div class="card-img-top">
                    <img class="w-100 tumbnail-gambar-kelas" src="{{ asset('thumbnail-kelas') .'/'  . 'architecture.png' }}" alt="">
                </div>
                <div class="course-text dropdown-toggle"  type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="card-text">
                        <h4 class="mb-2 "> Architecture Design </h4>
                    </div>
                </div>
                <div class="dropdown-menu w-100" id="level-kelas" aria-labelledby="dropdownMenu2">
                    @foreach (App\Models\Course::where('kategori_kelas', 'Architecture Design')->get() as $course)
                        <a href="{{ route('kelas.rincian', ['nama_kelas' => $course->nama_kelas, 'level_kelas' => 'Pemula']) }}">
                            <button class="dropdown-item" type="button">{{ $course->nama_kelas }}</button>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card shadow rounded-sm p-2 dropdown">
                <div class="card-img-top">
                    <img class="w-100 tumbnail-gambar-kelas" src="{{ asset('thumbnail-kelas') .'/'  . 'rendering.png' }}" alt="">
                </div>
                <div class="course-text dropdown-toggle"  type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="card-text">
                        <h4 class="mb-2 "> Rendering And Animation </h4>
                    </div>
                </div>
                <div class="dropdown-menu w-100" id="level-kelas" aria-labelledby="dropdownMenu2">
                    @foreach (App\Models\Course::where('kategori_kelas', 'Rendering And Animation')->get() as $course)
                        <a href="{{ route('kelas.rincian', ['nama_kelas' => $course->nama_kelas, 'level_kelas' => 'Pemula']) }}">
                            <button class="dropdown-item" type="button">{{ $course->nama_kelas }}</button>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card shadow rounded-sm p-2 dropdown">
                <div class="card-img-top">
                    <img class="w-100 tumbnail-gambar-kelas" src="{{ asset('thumbnail-kelas') .'/'  . 'rencana-anggaran-biaya.png' }}" alt="">
                </div>
                <div class="course-text dropdown-toggle"  type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="card-text">
                        <h4 class="mb-2 "> Mechanical Design </h4>
                    </div>
                </div>
                <div class="dropdown-menu w-100" id="level-kelas" aria-labelledby="dropdownMenu2">
                    @foreach (App\Models\Course::where('kategori_kelas', 'Rencana Anggaran Biaya')->get() as $course)
                        <a href="{{ route('kelas.rincian', ['nama_kelas' => $course->nama_kelas, 'level_kelas' => 'Pemula']) }}">
                            <button class="dropdown-item" type="button">{{ $course->nama_kelas }}</button>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
