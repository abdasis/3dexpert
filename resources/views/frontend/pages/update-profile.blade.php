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
                </div>
            </div>

            <div class="col-md-8">
                @if (Session::has('status'))
                <div class="alert alert-success">
                    {{ Session::get('status') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">Biodata</div>
                    <div class="card-body">
                        <form action="{{ route('profile.update', Auth::user()->id) }}" method="post" >
                            @csrf
                            @method('PUT')
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>:</th>
                                        <td><input type="text" class="form-control" name="nama_lengkap" value="{{ $user->name }}"></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <th>:</th>
                                        <td><input type="text" class="form-control" name="email" value="{{ $user->email }}"></td>
                                    </tr>
                                    <tr>
                                        <th>Universitas</th>
                                        <th>:</th>
                                        <td><input type="text" class="form-control" name="universitas" placeholder="Masukan Universitas" value="{{ $user->universitas ?? '' }}"></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <th>:</th>
                                        <td><input type="text" class="form-control" name="jenis_kelamin" placeholder="Masukan Jenis Kelamin" value="{{ $user->jenis_kelamin ?? '' }}"></td>
                                    </tr>
                                    <tr>
                                        <th>Telepon</th>
                                        <th>:</th>
                                        <td><input type="text" class="form-control" name="phone" placeholder="Masukan telepon" value="{{ $user->phone ?? '' }}"></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat Lengkap</th>
                                        <th>:</th>
                                        <td><textarea type="text" class="form-control" name="alamat_lengkap" placeholder="Masukan Alamat Lengkap">{{ $user->alamat_lengkap ?? '' }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Diskripsikan Dirimu</th>
                                        <th>:</th>
                                        <td><textarea type="text" class="form-control" rows="7" name="biodata" placeholder="Saya seorang ...">{{ $user->biodata ?? '' }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Upload Foto Profil</th>
                                        <th>:</th>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="trailer" name="thumbnail_materi">
                                                <label class="custom-file-label" for="trailer">Pilih foto</label>
                                            </div>
                                     </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <div class="form-group">
                                                <button class="btn btn-expert btn-block">Update Profile</button>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
