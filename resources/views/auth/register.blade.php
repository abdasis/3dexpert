@extends('layouts.app')

@section('content')
<section class="bg-home bg-gradient mt-4" id="home">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="home-title mo-mb-20">
                            <h1 class="mb-4 text-dark">Dunia Terus Berkembang
                                Ayo Bergabung Bersama Kami
                                dan Menjadi Desainer Hebat !</h1>
                            <p class="text-dark home-desc mb-5">3D Expert.id merupakan sebuah platform kelas desain 3D online
                                yang membantu kamu mendapat ilmu desain 3D dengan mudah
                                dan fleksibel</p>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-2 col-lg-5 offset-lg-1 col-md-7">
                        <div class="card-box border-1 p-4  rounded-14">
                            <div class="card-text">
                                <p>
                                    Daftar dan nikmati pengalaman belajar yang belum pernah kamu rasakan sebelumnya
                                </p>
                            </div>

                            <form method="POST" action="{{ route('user.store') }}">
                                @csrf

                                <div class="form-group">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama Lengkap">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Alamat Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password-confirm" type="password" placeholder="Konfirmasi Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="form-group">
                                    <input id="universitas" type="text" class="form-control @error('universitas') is-invalid @enderror" name="universitas" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama Instansi/Institusi">

                                    @error('universitas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nomor Telepon">

                                    @error('universitas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn font-weight-bolder btn-expert btn-block rounded-14">
                                        {{ __('Daftar Gratis') }}
                                    </button>
                                </div>

                                <div class="card-text">
                                    Telah memiliki akun? <a href="{{ route('login') }}">Masuk</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
    </div>
</section>
@endsection


