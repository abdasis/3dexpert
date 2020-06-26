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
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Kelas</td>
                                        <td>:</td>
                                        <td>{{ $kelas->nama_kelas }}</td>
                                    </tr>
                                    <tr>
                                        <td>Level Kelas</td>
                                        <td>:</td>
                                        <td>{{ $kelas->level_kelas }}</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Harga</th>
                                        <th>:</th>
                                        <th>Rp. {{ number_format($kelas->harga_kelas, 2, ',', '.') }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <button class="btn btn-expert"> <i class="mdi mdi-cart"></i> Checkout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
