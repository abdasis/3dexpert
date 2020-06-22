@extends('layouts.app-dark')


@section('content')
<div class="container-fluid mt-100 mb-100">
    <div class="row">
        <div class="col-md-8">
            <div class="container">
                <h4 class="text-expert">Trailer Kelas</h4>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="nama-kelas text-expert">{{ $course->nama_kelas }}</h3>
            <p class="font-16 text-white">20 Video Pembelajaran (3 Jam 40 Menit)</p>
            <p class="font-18 text-white"><b>Rating</b></p>
            <p>
                @foreach (range(1, $course->rating_kelas) as $rating)
                    <i class="fa fa-star text-warning"></i>
                @endforeach
            </p>
            <h4 class="harga-asli text-expert"><strike>Rp. {{ number_format($course->harga_kelas+190000, 2, ',', '.') }}/Kelas</strike></h4>
            <h3 class="harga-diskon text-expert text-white">Rp. {{ number_format($course->harga_kelas, 2, ',','.') }}</h3>
            <p class="font-16 text-white">( 20 Chapter + Ebook )</p>
            <a href="">
                <button class="btn btn-danger btn-block">Beli Sekarang</button>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p class="diskripsi-kelas">
                {!! $course->diskripsi_kelas !!}
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="accordion b-radius" id="accordionExample">
                <div class="card-silabus bg-black border-expert b-radius ">
                    <div class="card-header bg-black b-radius" id="headingOne">
                        <h4 class="text-left text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fa fa-plus-circle"></i> Apa itu 3D Expert.id?
                        </h4>
                    </div>

                    <div id="collapseOne" class="collapse text-white" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <a href="#">
                    <button class="btn btn-danger btn-block"><i class="fa fa-shopping-basket mr-1"></i>Beli Kelas</button>
                </a>
            </div>
        </div>
    </div>

    <section class="testimoni mt-100">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="testi-box mt-4">
                    <div class="card bg-black border-expert-50">
                        <div class="card-img-top">
                            <img src="{{ asset('/frontend/assets/images/peserta/ADINDA.png') }}" class="img-circle img-fluid mx-auto d-block foto-peserta" width="80px" alt="">
                        </div>
                        <div class="card-body">
                            <h4 class="text-center text-white">Adinda</h4>
                            <p class="text-center text-white">Universitas Trunojoyo Madura</p>
                            <div class="card-text text-center text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quod id doloribus veritatis

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
