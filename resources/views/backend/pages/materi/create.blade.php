@extends('backend.layouts.app')

@section('nama_situs')
    Tambah Materi Baru {{ $kelas }}
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
                <h4 class="page-title"> <a href="{{  url()->previous() }}"><i class="fa fa-arrow-alt-circle-left text-success"></i></a> Tambah materi di | <span class="text-danger">{{ $kelas }}</span></h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4></h4>
                    </div>
                    <form action="{{ route('materi.store', ['nama_kelas' => $kelas]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Materi</label>
                            <input type="text" class="form-control" name="nama_materi"  placeholder="Nama Kelas">
                        </div>
                        <div class="form-group">
                            <label for="">Diskripsi Materi</label>
                            <textarea  placeholder="Masukan Diksirpsi Kelas" name="diskripsi_materi">

                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="thumbail_kelas">Video Materi</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="trailer" name="video_materi">
                                <label class="custom-file-label" for="trailer">Pilih Video Materi</label>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                <span class="btn-label"><i class="mdi mdi-file-document-edit-outline
                                    "></i></span>Simpan Kelas
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
<script src="https://cdn.tiny.cloud/1/3kubek8r1p1mz4kvit7hc1z2mxd8wgg551cbeu82qkmenprf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
      height: 300,
    });
  </script>
@endsection
