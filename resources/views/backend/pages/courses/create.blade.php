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
                            <label for=""></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
