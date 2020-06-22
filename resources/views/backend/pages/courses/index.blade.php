@extends('backend.layouts.app')
@section('nama_situs')
    Daftar Kursus
@endsection
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
                        <h4>Daftar Semua Course</h4>
                    </div>
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kursus</th>
                                <th>Level</th>
                                <th>Pengajar</th>
                                <th>Harga Kelas</th>
                                <th>Rating Kelas</th>
                                <th>Option</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($courses as $key => $course)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><a href="{{ route('courses.edit', $course->id) }}">{{ $course->nama_kelas }}</a></td>
                                <td><div class="badge {{ $course->level_kelas == 'Pemula' ? 'badge-info' : ($course->level_kelas == 'Expert' ? 'badge-success' : 'badge-warning') }}">{{ $course->level_kelas }}</div></td>
                                <td>{{ $course->nama_pengajar }}</td>
                                <td>Rp. {{ number_format((int) $course->harga_kelas, 2, ',', '.') }}</td>
                                <td>
                                    @foreach (range(1, $course->rating_kelas) as $rating)
                                        <i class="fa fa-star text-warning"></i>
                                    @endforeach
                                </td>
                                <td>
                                    <a class="text-center" href="{{ route('materi.create', $course->nama_kelas) }}">
                                        <button type="button" class="btn btn-success waves-effect waves-light btn-sm">
                                            <span class="btn-label"><i class="mdi mdi-plus"></i></span>Materi
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
<link href="{{ url('/') }}/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/') }}/backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/') }}/backend/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/') }}/backend/assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection


@section('js')
<script src="{{ url('/') }}/backend/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ url('/') }}/backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ url('/') }}/backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/backend/assets/js/pages/datatables.init.js"></script>
@endsection
