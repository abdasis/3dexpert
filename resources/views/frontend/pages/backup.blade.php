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
                                <li>Jangan lakukan transfer di luar nomor rekening atas nama Bukalapak.</li>
                            </ul>
                            <a href="#" class="text-danger font-16">Lihat selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="card border-1 rounded-0">
                    <div class="card-header rounded-0">
                        <h5 class="p-0 m-0">Pembayaran: Autocad Basic Class</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-center">Jumlah Tagihan</p>
                        <h3 class="text-center">Rp. {{ number_format($order->total_price, 2, ',', '.') }}</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-center m-0">
                            Bank BCA
                        </p>
                        <p class="text-center m-0">
                            M. Samsuddin
                        </p>
                        <h4 class="text-center m-0">
                            80008191013803160
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
                            482749273957364
                        </h4>

                        <div class="logo-bank">
                            <img src="https://www.bukalapak.com/images/desktop/benefits/jaminan.png" class="rounded mx-auto mt-0 d-block img-thumbnail" width="30px" alt="">
                        </div>
                    </div>

                    <div class="card-body" style="background: #f5f5f5">
                        <h5>Petunjuk Pembayaran</h5>
                        <div class="card">
                            <div class="card-header rounded-0" style="background: #f8f8f8">
                                <h5 class="m-0 p-0">
                                    Mengikuti Kelas di 3D Expert.id
                                </h5>
                            </div>
                            <div class="card-body">
                                <ol type="1">
                                    <li>Pastikan kamu sudah memiliki sebuah akun</li>
                                    <li>Silahkan membuat akun jika belum memilikinya</li>
                                    <li>Masuk ke website 3D Expert.id menggunakan Email dan Password pribadimu</li>
                                    <li>Pilih kelas yang kamu butuhkan</li>
                                    <li>Klik tombol beli kelas</li>
                                    <li>Jika ada promo silahkan gunakan kode promo</li>
                                    <li>Bayar sesuai dengan nominal yang tertera pada Harga Total</li>
                                    <li>Jika selesai transfer silahkan Konfirmasi melalui WhatsApp, dengan mengirim bukti transfer dan identitas diri</li>
                                    <li>Kelas Desain yang kamu pilih siap di gunakan</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="card-body shadow-none p-0 m-0">
                        <button class="btn btn-lg btn-block btn-expert rounded-0">Konfirmasi Pembayaran</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
