@extends('layouts.app')

@section('content')
<!-- home start -->
<section class="bg-home bg-b-decor" id="home">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="home-title mo-mb-20">
                            <h1 class="mb-4 text-black">Dunia Terus Berkembang
                                Ayo Bergabung Bersama Kami
                                dan Menjadi Desainer Hebat !</h1>
                            <p class="mb-5">3D Expert.id merupakan sebuah platform kelas desain 3D online
                                yang membantu kamu mendapat ilmu desain 3D dengan mudah
                                dan fleksibel</p>
                            <div class="subscribe">
                                <button class="btn btn-light btn-rounded">Daftar Sekarang</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-7">
                        <div class="home-img position-relative">
                            <img src="images/home-img.png" alt="" class="home-first-img">
                            <img src="images/home-img.png" alt="" class="home-second-img mx-auto d-block">
                            <img src="images/home-img.png" alt="" class="home-third-img">
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
    </div>
</section>
<!-- home end -->

<!-- features start -->
<section class="section-sm bg-t-decor" id="features">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-4 pb-1">
                    <h3 class="mb-3">KURSUS TERBARU</h3>
                    <p class="text-muted">Dapatkan kursus-kursus terbaru dari kami</p>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="slider-kursus">
            @foreach ($materies as $materi)
            <div class="col-lg-4">
                <div class="card shadow rounded-sm dropdown" style="border-radius: 10px !important; background: #3E4095">
                    <div class="card-img-top">
                        <img class="w-100"  style="border-radius: 10px !important" src="{{ asset('thumbnail-materi') .'/'  . $materi->thumbnail_materi }}" alt="">
                    </div>
                    <div class="course-text card-body">
                        <div class="card-text">
                            <h4 class="mb-2 text-white "> <a class="text-white" href="{{ route('kelas.tentang-kelas', ['kelas' => $materi->course->nama_kelas]) }}">{{ $materi->judul_materi }}</a> </h4>
                            <small class="text-white">{{ $materi->course->kategori_kelas }} </small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</section>
<!-- features end -->

<!-- available demos start -->
<section class="section bg-gradient" id="demo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="title text-center mb-3">
                    <h3>Pelanggan Kami</h3>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row justify-content-center">
            @foreach (App\Models\Klien::all() as $client)
            <div class="col-md-1 mb-2">
                <img src="{{ asset('logo-kampus') . '/' . $client->logo_kampus }}" class="logo-kampus" alt="" srcset="" width="80px">
            </div>
            @endforeach
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="text-center mt-4">
                    <button class="btn btn-outline-success navbar-btn">Seluruh Pelanggan <i class="mdi mdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</section>
<!-- available demos end -->

<!-- testimonial start -->
<section class="section bg-gradient" id="clients">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-4">
                    <h3>What our Users Says</h3>
                    <p class="text-muted">The clean and well commented code allows easy customization of the theme.It's designed for describing your app, agency or business.</p>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="slider-testi">
        @foreach (App\Models\Testimoni::orderBy('created_at', 'DESC')->paginate(3) as $testimoni)
        <div class="col-lg-4">
            <div class="testi-box mt-4">
                <div class="card">
                    <div class="card-img-top">
                        <img src="{{ asset('foto-peserta') . '/' . $testimoni->foto_peserta }}" class="img-circle img-fluid mx-auto d-block foto-peserta" width="80px" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="text-center">{{ $testimoni->nama_peserta }}</h4>
                        <p class="text-center text-primary">{{ $testimoni->nama_kampus }}</p>
                        <div class="card-text text-center">
                           {{ $testimoni->isi_testimoni }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
            <!-- end col -->

        </div>
        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</section>
<!-- testimonial end -->

<!-- faqs start -->
<section class="section bg-gradient" id="faq">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-5">
                    <h3>FAQ | Hal yang sering ditanyakan</h3>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="accordion" id="accordionExample">
                    <div class="card bg-transparent">
                        <div class="card-header bg-transparent header-faq" id="headingOne">
                            <h4 class="text-left faq-title" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa fa-plus-circle"></i> Apa itu 3D Expert.id?
                            </h4>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body bg-white content-faq">
                            3D EXPERT.ID Merupakan website yang menampilkan kelas desain online dimana peserta bisa belajar desain dari mentor-mentor tebrarik dibidangnya, kapan saja dan dimana saja serta dengan harga murah
                            </div>
                        </div>
                    </div>


                    <div class="card bg-transparent">
                        <div class="card-header bg-transparent header-faq" id="headingdua">
                            <h4 class="text-left faq-title" type="button" data-toggle="collapse" data-target="#collapsedua" aria-expanded="true" aria-controls="collapsedua">
                                <i class="fa fa-plus-circle"></i> Apa yang saya dapatkan jika mendaftar di 3D Expert.id?
                            </h4>
                        </div>

                        <div id="collapsedua" class="collapse" aria-labelledby="headingdua" data-parent="#accordionExample">
                            <div class="card-body bg-white content-faq">
                            Kamu akan mendapatkan materi video pembelajaran yang dpat di download konsultasi ke pengajar, modul materi, tergabung di grup telegram desainer nasioanl dan E-Certificate
                            </div>
                        </div>
                    </div>

                    <div class="card bg-transparent">
                        <div class="card-header bg-transparent header-faq" id="headingtiga">
                            <h4 class="text-left faq-title" type="button" data-toggle="collapse" data-target="#collapsetiga" aria-expanded="true" aria-controls="collapsetiga">
                                <i class="fa fa-plus-circle"></i> Bagaimana metode belajar di 3D Expert.id?
                            </h4>
                        </div>

                        <div id="collapsetiga" class="collapse" aria-labelledby="headingtiga" data-parent="#accordionExample">
                            <div class="card-body bg-white content-faq">
                            Kamu akan belajar dengan menonotn video tersetruktur di web 3D Expert.id, Kamu dapat mengulangi video hingga paham dan dapat mendownload video pembelajaran
                            </div>
                        </div>
                    </div>

                    <div class="card bg-transparent">
                        <div class="card-header bg-transparent header-faq" id="headingempat">
                            <h4 class="text-left faq-title" type="button" data-toggle="collapse" data-target="#collapseempat" aria-expanded="true" aria-controls="collapseempat">
                                <i class="fa fa-plus-circle"></i> Apakah 3D Expert.id membuka kelas offline?
                            </h4>
                        </div>

                        <div id="collapseempat" class="collapse" aria-labelledby="headingempat" data-parent="#accordionExample">
                            <div class="card-body bg-white content-faq">
                           Ya, 3D Expert.id juga membuka kelas online, dengna cara mendaftar di expert class maka kamu akan mendapatkan fasilitas super di 3d Expert.id
                            </div>
                        </div>
                    </div>

                    <div class="card bg-transparent">
                        <div class="card-header bg-transparent header-faq" id="headinglima">
                            <h4 class="text-left faq-title" type="button" data-toggle="collapse" data-target="#collapselima" aria-expanded="true" aria-controls="collapselima">
                                <i class="fa fa-plus-circle"></i>Bagaimana dengan jadwal belajarnya?
                            </h4>
                        </div>

                        <div id="collapselima" class="collapse" aria-labelledby="headinglima" data-parent="#accordionExample">
                            <div class="card-body bg-white content-faq">
                          Kamu dapat belajar kapanpun dan dimanapun. Kamu bisa langsung belajar setelah melakukan pembayaran
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->
</section>
 <!-- faqs end -->
@endsection
