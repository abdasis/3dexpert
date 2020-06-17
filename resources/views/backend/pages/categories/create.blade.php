@extends('backend.layouts.app')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Course</a></li>
                        <li class="breadcrumb-item active">Daftar Course</li>
                    </ol>
                </div>
                <h4 class="page-title">Halaman Daftar Kursus</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Tambah Kursus Baru</h4>
                    </div>
                    <form action="{{ route('courses.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama_kelas">Nama Kelas</label>
                            <input type="text" class="form-control shadow-none" placeholder="Masukan Nama Kelas" name="nama_kelas">
                        </div>

                        <div class="form-group">
                            <label for="level_kelas">Level Kelas</label>
                            <select name="level_kelas" id="level_kelas" class="form-control">
                                <option value="">Pilih Level</option>
                                <option>Pemula</option>
                                <option>Intermediate</option>
                                <option>Expert</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nama_mentor">Nama Mentor</label>
                            <input type="text" class="form-control shadow-none" placeholder="Masukan Nama Mentor" name="nama_mentor">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary"><i class="fa fa-save mr-1"></i>Simpan Kursus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
