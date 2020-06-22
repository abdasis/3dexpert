@extends('backend.layouts.app')

@section('nama_situs')
    Edit Kursus {{ $course->nama_kelas }}
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
                <h4 class="page-title">Edit Kelas <span class="text-danger">{{ $course->nama_kelas }}</span></h4>
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
                    <form action="{{ route('courses.update', $course->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Kelas</label>
                            <input type="text" class="form-control" name="nama_kelas" value="{{ $course->nama_kelas }}"  placeholder="Nama Kelas">
                        </div>
                        <div class="form-group">
                            <label for="">Diskripsi Kelas</label>
                            <textarea  placeholder="Masukan Diksirpsi Kelas" name="diskripsi_kelas">
                                {{ $course->diskripsi_kelas }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="level_kelas">Level Kelas</label>
                            <select class="form-control" name="level_kelas" id="level_kelas">
                                <option value="">Pilih Level</option>
                                <option value="Pemula" {{ $course->level_kelas == 'Pemula' ? 'selected' : '' }}>Pemula</option>
                                <option value="Intermediate" {{ $course->level_kelas == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                                <option value="Expert" {{ $course->level_kelas == 'Expert' ? 'selected' : '' }}>Expert</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pengajar">Nama Pemateri</label>
                            <input type="text" value="{{ $course->nama_pengajar }}" class="form-control" name="nama_pengajar" placeholder="Masukan Nama Pengajar">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Kelas</label>
                            <input type="text" class="form-control" value="{{ $course->harga_kelas }}" name="harga_kelas" placeholder="Rp. 500000 ">
                        </div>
                        <div class="form-group">
                            <label for="harga">Rating Kelas</label>
                            <input type="text" class="form-control" name="rating_kelas" value="{{ $course->rating_kelas }}" placeholder="Masukan rating kelas">
                            <small class="text-muted">Masukan jumlah bintang, max 5 bintang</small>
                        </div>
                        <div class="form-group">
                            <label for="thumbail_kelas">trailer Kelas</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="trailer" name="trailer" value="{{ $course->trailer }}">
                                <label class="custom-file-label" for="trailer">Choose file</label>
                            </div>
                        </div>

                        <img src="{{ asset('thumbnail-kelas') . '/' . $course->thumbnail }}" id="img-kelas" alt="" width="150px" class="img-thumbnail">
                        <div class="form-group">
                            <label for="thumbail_kelas">Thumbnail Kelas</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
                                <label class="custom-file-label" for="thumbnail">Pilih Thumbnail</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-warning waves-effect waves-light">
                                <span class="btn-label"><i class="mdi mdi-file-document-edit-outline
                                    "></i></span>Update Kelas
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
