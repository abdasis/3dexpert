@extends('layouts.app-gray')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt-100">
        <div class="col-md-7">
            <div class="container">
                <div class="card border-1 p-2">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="https://www.bukalapak.com/images/desktop/benefits/jaminan.png" class="rounded mx-auto mt-4 d-block" alt="">
                        </div>
                        <div class="col-md-10">
                            <p class="font-16"><b>Selalu waspada terhadap pihak tidak bertanggung jawab</b></p>
                            <ul class="pl-3">
                                <li>Jangan lakukan pembayaran dengan nominal yang berbeda dengan yang tertera pada tagihan kamu.</li>
                                <li>Jangan lakukan transfer di luar nomor rekening atas nama <b>M. Samsuddin</b></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card border-1 rounded-0">
                    <div class="card-header rounded-0">
                        <h5 class="p-0 m-0 font-20">Pembayaran Kelas :{{ $order->nama_kelas . ' ' . $order->level_kelas }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-center">Jumlah Tagihan</p>
                        <h3 class="text-center">Rp. {{ $order->total_price }}</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-center m-0">
                            Bank BCA
                        </p>
                        <p class="text-center m-0">
                            M. Samsuddin
                        </p>
                        <h4 class="text-center m-0">
                            1900359906
                        </h4>

                        <div class="logo-bank">
                            <img src="https://www.bukalapak.com/images/desktop/benefits/jaminan.png" class="rounded mx-auto mt-0 d-block img-thumbnail" width="30px" alt="">
                        </div>
                    </div>

                    <div class="card-body">
                        <p class="text-center m-0">
                            Bank BTN
                        </p>
                        <p class="text-center m-0">
                            M. Samsuddin
                        </p>
                        <h4 class="text-center m-0">
                            0037701610166994
                        </h4>

                        <div class="logo-bank">
                            <img src="https://www.bukalapak.com/images/desktop/benefits/jaminan.png" class="rounded mx-auto mt-0 d-block img-thumbnail" width="30px" alt="">
                        </div>
                    </div>

                    <div class="card-body" style="background: #f5f5f5">
                        <form action="{{ route('order.store-bukti-pembayaran') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="invoice_number" value="{{ $order->invoice_number }}">
                            <div class="form-group">
                                <label for="thumbail_materi">Pilih bukti transfer</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="trailer" name="foto_bukti">
                                    <label class="custom-file-label" for="trailer">Pilih bukti tranfer</label>
                                </div>
                            </div>
                            <button class="btn btn-lg btn-block btn-expert rounded-0">Konfirmasi Pembayaran</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
