@extends('backend.layouts.app')
@section('nama_situs')
    Daftar Semua Voucher
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
                <h4 class="page-title">Halaman Daftar Voucher</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Daftar Semua Voucher</h4>
                    </div>
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kode</th>
                                <th>Kadaluarsa</th>
                                <th>Status</th>
                                <th>Kuota</th>
                                <th>Option</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($vouchers as $key => $voucher)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $voucher->nama }}</td>
                                <td>{{ $voucher->kode }}</td>
                                <td><div class="badge badge-danger">{{ $voucher->expire_date }}</div></td>
                                <td>
                                    <div class="badge {{ $voucher->status == 'active' ? 'badge-success' : 'badge-danger' }}">{{ $voucher->status }}</div>
                                </td>
                                <td>{{ $voucher->kuota }} Orang</td>
                                <td>
                                    <div class="row">
                                        <form action="{{ route('courses.destroy', $voucher->id) }}" method="post" onsubmit="return confirm('Apakah yakin untuk hapus kelas ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm mr-1">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
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
