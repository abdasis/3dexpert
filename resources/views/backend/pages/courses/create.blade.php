@extends('backend.layouts.app')

@section('nama_situs')
    Tambah Kursus Baru
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
                <h4 class="page-title">Tambah Kelas<span class="text-danger"></span></h4>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-12">
            @if (Session::has('status'))
            <div class="alert alert-success">{{ Session::get('status') }}</div>
        @endif
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Tambah Kelas Baru</h4>
                    </div>
                    <form action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Kelas</label>
                            <input type="text" class="form-control" name="nama_kelas" value="{{ old('nama_kelas') }}"  placeholder="Nama Kelas">
                        </div>
                        <div class="form-group">
                            <label for="">Diskripsi Kelas</label>
                            <textarea  placeholder="Masukan Diksirpsi Kelas" name="diskripsi_kelas">
                                {{ old('diskripsi_kelas') }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="level_kelas">Level Kelas</label>
                            <select class="form-control" name="level_kelas" id="level_kelas">
                                <option value="">Pilih Level</option>
                                <option value="Pemula" {{ old('level_kelas') == 'Pemula' ? 'selected' : '' }}>Pemula</option>
                                <option value="Intermediate" {{ old('level_kelas') == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                                <option value="Expert" {{ old('level_kelas') == 'Expert' ? 'selected' : '' }}>Expert</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kategori_kelas">Kategori Kelas</label>
                            <select class="form-control" name="kategori_kelas" id="kategori_kelas">
                                <option value="">Pilih Kategori</option>
                                <option value="Mechanical Design" {{ old('kategori_kelas') == 'Mechanical Design' ? 'selected' : '' }}>Mechanical Design</option>
                                <option value="Architecture Design" {{ old('kategori_kelas') == 'Architecture Design' ? 'selected' : '' }}>Architecture Design</option>
                                <option value="Rendering And Animation" {{ old('kategori_kelas') == 'Rendering And Animation' ? 'selected' : '' }}>Rendering And Animation</option>
                                <option value="Rencana Anggaran Biaya" {{ old('kategori_kelas') == 'Rencana Anggaran Biaya' ? 'selected' : '' }}>Rencana Anggaran Biaya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pengajar">Nama Pemateri</label>
                            <input type="text" value="{{ old('nama_pengajar') }}" class="form-control" name="nama_pengajar" placeholder="Masukan Nama Pengajar">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Kelas</label>
                            <input type="text" class="form-control" value="{{ old('harga_kelas') }}" name="harga_kelas" placeholder="Rp. 500000 ">
                        </div>
                        <div class="form-group">
                            <label for="harga">Rating Kelas</label>
                            <input type="text" class="form-control" name="rating_kelas" value="{{ old('rating_kelas') }}" placeholder="Masukan rating kelas">
                            <small class="text-muted">Masukan jumlah bintang, max 5 bintang</small>
                        </div>
                        <div class="form-group">
                            <label for="thumbail_kelas">trailer Kelas</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="trailer" name="trailer" value="{{ old('trailer') }}">
                                <label class="custom-file-label" for="trailer">Choose file</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="thumbail_kelas">Thumbnail Kelas</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
                                <label class="custom-file-label" for="thumbnail">Pilih Thumbnail</label>
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

  <script>
      $('#img-kelas').click(function(){
          alert('Ok');
      })
  </script>
@endsection
