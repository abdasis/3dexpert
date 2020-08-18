@extends('layouts.app-gray')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center mt-100 mb-100">
            <div class="col-md-8">
                <div class="card-box shadow-sm">
                    <div class="card-title">
                        <h4>Detail Order Kelas</h1>
                    </div>
                    <form action="{{ route('order.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="kelas" value="{{ $kelas->nama_kelas }}">
                        <div class="card-body">
                            <table class="table table-light table-striped table-sm">
                                <tbody>
                                    <tr>
                                        <td class="text-dark">Nama</td>
                                        <td class="text-dark">:</td>
                                        <td class="text-dark">{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark">Email</td>
                                        <td class="text-dark">:</td>
                                        <td class="text-dark">{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark">Nama Kelas</td>
                                        <td class="text-dark">:</td>
                                        <td class="text-dark">{{ $kelas->nama_kelas }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark">Level Kelas</td>
                                        <td class="text-dark">:</td>
                                        <td class="text-dark">{{ $kelas->level_kelas }}</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-dark">Biaya</th>
                                        <th class="text-dark">:</th>
                                        <th class="text-dark">Rp. {{ $kelas->harga_kelas }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" placeholder="Masukan Kode Promo" aria-label="Masukan Kode Promo">
                                <div class="input-group-append">
                                    <button class="btn btn-dark waves-effect waves-light" type="button"><i class="fa fa-money-bill mr-1"></i>Cek Kode</button>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-expert text-dark font-16 font-weight-bolder rounded-14"> <i class="mdi mdi-cart"></i> Bayar Sekarang</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
