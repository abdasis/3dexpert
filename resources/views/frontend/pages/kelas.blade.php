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
        <div class="col-md-3">
            <div class="card shadow rounded-sm p-2 dropdown dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer">
                <div class="card-img-top">
                    <img class="w-100" src="{{ asset('/frontend/assets/course/course-1.jpg') }}" alt="">
                </div>
                <div class="course-text" >
                    <div class="card-text">
                        <h4 class="mb-2">Responsive Layouts</h4>
                        <small class="text-muted">Mechanichal Analysis </small>
                    </div>
                    <div class="card-text mt-2">
                        <div class="badge bg-soft-info text-info p-1">
                            1 Jam 53 Menit
                        </div>

                        <div class="badge bg-soft-info text-info p-1 float-right">
                            <i class="fa fa-user-graduate mr-1 "></i>Abd. Asis
                        </div>
                    </div>
                </div>

                <div class="dropdown-menu w-100" id="level-kelas" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Mudah</a>
                    <a class="dropdown-item" href="#">Intermediate</a>
                    <a class="dropdown-item" href="#">Expert</a>
                  </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow rounded-sm p-2 dropdown dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer">
                <div class="card-img-top">
                    <img class="w-100" src="{{ asset('/frontend/assets/course/course-1.jpg') }}" alt="">
                </div>
                <div class="course-text" >
                    <div class="card-text">
                        <h4 class="mb-2">Responsive Layouts</h4>
                        <small class="text-muted">Mechanichal Analysis </small>
                    </div>
                    <div class="card-text mt-2">
                        <div class="badge bg-soft-info text-info p-1">
                            1 Jam 53 Menit
                        </div>

                        <div class="badge bg-soft-info text-info p-1 float-right">
                            <i class="fa fa-user-graduate mr-1 "></i>Abd. Asis
                        </div>
                    </div>
                </div>

                <div class="dropdown-menu w-100" id="level-kelas" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Mudah</a>
                    <a class="dropdown-item" href="#">Intermediate</a>
                    <a class="dropdown-item" href="#">Expert</a>
                  </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow rounded-sm p-2 dropdown dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer">
                <div class="card-img-top">
                    <img class="w-100" src="{{ asset('/frontend/assets/course/course-1.jpg') }}" alt="">
                </div>
                <div class="course-text" >
                    <div class="card-text">
                        <h4 class="mb-2">Responsive Layouts</h4>
                        <small class="text-muted">Mechanichal Analysis </small>
                    </div>
                    <div class="card-text mt-2">
                        <div class="badge bg-soft-info text-info p-1">
                            1 Jam 53 Menit
                        </div>

                        <div class="badge bg-soft-info text-info p-1 float-right">
                            <i class="fa fa-user-graduate mr-1 "></i>Abd. Asis
                        </div>
                    </div>
                </div>

                <div class="dropdown-menu w-100" id="level-kelas" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Mudah</a>
                    <a class="dropdown-item" href="#">Intermediate</a>
                    <a class="dropdown-item" href="#">Expert</a>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
