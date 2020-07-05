@extends('layouts.app-dark')


@section('content')
    <div class="container">
        <div class="row mt-100 mb-100">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Profile</div>
                    <div class="card-body">
                        <img src="{{ asset('backend/assets/images/users/user-2.jpg') }}" alt="" class="rounded-circle img-thumbnail rounded mx-auto d-block">
                        <h4 class="text-center">
                            {{ Auth::user()->name }}
                        </h4>
                        <p class="text-center text-info">{{ Auth::user()->email }}</p>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('profile.edit', Auth::user()->id) }}">
                            <button class="btn btn-expert btn-block">
                                Edit Profile
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Biodata</div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>:</th>
                                    <td>{{ Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <th>:</th>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <th>Universitas</th>
                                    <th>:</th>
                                    <td>{{ empty(Auth::user()->universitas) ? '-' : Auth::user()->universitas  }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <th>:</th>
                                    <td>{{ empty(Auth::user()->jenis_kelamin) ? '-' : Auth::user()->jenis_kelamin  }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat Lengkap</th>
                                    <th>:</th>
                                    <td>{{ empty(Auth::user()->alamat_lengkap) ? '-' : Auth::user()->alamat_lengkap}}</td>
                                </tr>
                                <tr>
                                    <th>Biodata</th>
                                    <th>:</th>
                                    <td>{{ empty(Auth::user()) ? '-' : Auth::user()->biodata }}</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
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
                <div class="col-lg-12 mb-2 " style="border-radius: 15px; border: 2px solid #28D6D7">
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
                            <img class="w-100 thumbnail-kelas-saya" height="200px" width="240px" src="{{ asset('thumbnail-kelas') .'/'  . $course->thumbnail }}" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                        <img class="w-100" src="{{ asset('frontend/assets/images/icons/pdf.png') }}" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <p>Ebook</p>
                                            <p class="font-16 text-expert">Download PDF</p>
                                        </div>
                                    </div>
                                    <button class="btn-block btn btn-expert">Buka Kelas</button>
                                </div>
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                        <img class="w-100 mb-2" src="{{ asset('frontend/assets/images/icons/portofolio.png') }}" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <p>Kirim Portfolio</p>
                                            <p class="font-16 text-expert">Upload Karya</p>
                                        </div>
                                    </div>
                                    <button class="btn-block btn btn-expert">Cetak Sertifikat</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
