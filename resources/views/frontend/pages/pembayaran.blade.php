@extends('layouts.app-gray')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt-100">
        <div class="col-md-10">
            <div class="container">
                @if (Session::has('status'))
                    <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif
            </div>
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kelas</th>
                            <th>Invoice</th>
                            <th>Biaya</th>
                            <th>Tanggal Order</th>
                            <th>Hapus</th>
                            <th>Status</th>
                            <th>Bayar Sekarang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $key => $order)
                            @foreach ($order->courses as $course)
                            <tr>
                                <td scope="row">{{ $key+1 }}</td>
                                <td>{{ $course->nama_kelas }}</td>
                                <td>{{ $order->invoice_number }}</td>
                                <td>{{ $order->total_price }}</td>
                                <td>{{ date('d-m-Y', strtotime($order->created_at)) }}</td>
                                <td>
                                    <form action="{{ route('order.destroy', $order->id) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus pembelian ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button>
                                    </form>
                                </td>
                                <td>
                                    @if ($order->status == 'BELUM')
                                        <button class="btn btn-sm btn-danger">BELUM DIBAYAR</button>
                                    @elseif($order->status == 'AKTIF')
                                        <button class="btn btn-sm btn-success">SUDAH AKTIF</button>
                                    @else
                                        <button class="btn btn-sm btn-info">MENUNGGU VERIFIKASI</button>
                                    @endif

                                </td>
                                <td>
                                    <a href="{{ route('order.upload-bukti', ['order_id' => $order->id, 'nama_kelas' => $course->nama_kelas]) }}">
                                        <button class="btn btn-sm btn-dark">Bayar Sekarang</button>
                                    </a>
                                </td>


                            </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
