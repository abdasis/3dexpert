@extends('backend.layouts.app')

@section('nama_situs')
    Tambah Kursus Baru
@endsection


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Clients</a></li>
                        <li class="breadcrumb-item active">Tambah Klien</li>
                    </ol>
                </div>
                <h4 class="page-title">Tambah Klien<span class="text-danger"></span></h4>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-12">
            @if (Session::has('status'))
            <div class="alert alert-success">{{ Session::get('status') }}</div>
        @endif
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Tambah Kelas Baru</h4>
                    </div>
                    <form action="{{ route('clients.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Kampus</label>
                            <input type="text" class="form-control" name="nama_kampus" value="{{ old('nama_kelas') }}"  placeholder="Nama Kelas">
                        </div>

                        <div class="form-group">
                            <label for="loog_kampus">Logo Kampus</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="logo_kampus" name="logo_kampus" value="{{ old('logo_kampus') }}">
                                <label class="custom-file-label" for="logo_kampus">pilih logo</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                <span class="btn-label"><i class="mdi mdi-file-document-edit-outline
                                    "></i></span>Simpan Kelas
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')

@endsection
