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
        <div class="col-md-12">
            <div class="alert alert-info">Tombol verifikasi digunakan untuk memverifikasi pembeli, silahkan periksan terlebih dahulu pembayaran sbeelum klik tombol verifikasi.</div>
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
                                <th>Nama Pembeli</th>
                                <th>Invoice</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Dipesan</th>
                                <th>Option</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($orders as $key => $order)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><a href="{{ route('courses.edit', $order->id) }}">{{ $order->user->name }}</a></td>
                                <td>{{ $order->invoice_number }}</td>
                                <td>Rp. {{ number_format((int)  $order->total_price, 2, ',', '.') }}</td>
                                <td><div class="badge {{ $order->status == 'BELUM' ? 'badge-warning' : 'badge-success' }} shadow-none p-1">{{ $order->status }}</div></td>
                                <td>
                                    {{ date('d-m-Y', strtotime($order->created_at)) }}
                                </td>
                                <td>
                                    <div class="row">
                                        <form action="{{ route('admin.orders.update', $order->id) }}" method="post">
                                            @method('PUT')
                                            @csrf
                                            <button type="submit" class="btn btn-success waves-effect waves-light mr-1 btn-sm">
                                                <i class="fa fa-file-signature"></i>
                                            </button>
                                        </form>
                                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="post" onsubmit="return confirm('Apakah yakin membatalkan orderan ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger waves-effect waves-light btn-sm">
                                                <i class="fa fa-trash-alt"></i>
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
