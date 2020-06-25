@extends('layouts.app')


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
                                    <td>{{ empty(Auth::user()->biodata->universitas) ? '-' : Auth::user()->biodata->universitas  }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <th>:</th>
                                    <td>{{ empty(Auth::user()->biodata->jenis_kelamin) ? '-' : Auth::user()->biodata->jenis_kelamin  }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat Lengkap</th>
                                    <th>:</th>
                                    <td>{{ empty(Auth::user()->biodata->alamat_lengkap) ? '-' : Auth::user()->biodata->alamat_lengkap}}</td>
                                </tr>
                                <tr>
                                    <th>Biodata</th>
                                    <th>:</th>
                                    <td>{{ empty(Auth::user()->biodata->biodata) ? '-' : Auth::user()->biodata->biodata }}</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
