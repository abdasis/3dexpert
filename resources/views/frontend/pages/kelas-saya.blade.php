@extends('layouts.app-dark')

@section('content')
<div class="container-fluid mt-100">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="text-left mb-4 pb-1">
                <h2 class="mb-3 text-expert">Kelas Saya</h2>
            </div>
        </div>
    </div>
    <div class="row mb-100">
        @foreach ($courses as $course)
            <div class="col-lg-12 " style="border-radius: 15px; border: 2px solid #28D6D7">
                <div class="row p-2">
                    <div class="col-md-6">
                        <h2 class="mb-2 text-expert "> {{ $course->nama_kelas }} </h2>
                    </div>
                    <div class="col-md-6">
                        <h3 class="float-right">
                            <span class="text-white">Rating:</span> @foreach (range(1, $course->rating_kelas) as $rating)
                                <i class="fa fa-star text-warning"></i>
                            @endforeach
                        </h3>
                    </div>
                    <div class="col-md-4">
                        <img class="w-100" src="{{ asset('thumbnail-kelas') .'/'  . $course->thumbnail }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <i class="mdi mdi-file-pdf font-28 text-center"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <p>Ebook</p>
                                        <p>Download PDF</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                </div>
                {{-- <div class="card shadow rounded-sm p-2 dropdown">
                    <div class="">
                    </div>
                    <div class="course-text dropdown-toggle"  type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="card-text">
                            <h4 class="mb-2 "> {{ $course->nama_kelas }} </h4>
                            <small class="text-muted">{{ $course->kategori_kelas }} </small>
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
                </div> --}}
            </div>
        @endforeach
    </div>
</div>
@endsection
