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
        @foreach ($courses as $course)
            <div class="col-lg-3">
                <div class="card shadow rounded-sm p-2 dropdown">
                    <div class="card-img-top">
                        <img class="w-100" src="{{ asset('thumbnail-kelas') .'/'  . $course->thumbnail }}" alt="">
                    </div>
                    <div class="course-text dropdown-toggle"  type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="card-text">
                            <h4 class="mb-2 "> {{ $course->nama_kelas }} </h4>
                            <small class="text-muted">Mechanichal Analysis </small>
                        </div>
                        <div class="card-text mt-2">
                            <div class="badge bg-soft-info text-info p-1">
                                1 Jam 53 Menit
                            </div>
                            <div class="badge bg-soft-info text-info p-1 float-right">
                                <i class="fa fa-user-graduate mr-1 "></i>{{ $course->nama_pengajar }}
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-menu w-100" id="level-kelas" aria-labelledby="dropdownMenu2">
                        <a href="{{ route('kelas.rincian', ['nama_kelas' => $course->nama_kelas, 'level_kelas' => 'Pemula']) }}">
                            <button class="dropdown-item" type="button">Pemula</button>
                        </a>
                        <a href="{{ route('kelas.rincian', ['nama_kelas' => $course->nama_kelas, 'level_kelas' => 'Intermediate']) }}">
                            <button class="dropdown-item" type="button">Intermediate</button>
                        </a>
                        <a href="{{ route('kelas.rincian', ['nama_kelas' => $course->nama_kelas, 'level_kelas' => 'Expert']) }}">
                            <button class="dropdown-item" type="button">Expert</button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>
@endsection
