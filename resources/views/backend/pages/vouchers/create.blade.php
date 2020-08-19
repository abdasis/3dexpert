@extends('backend.layouts.app')

@section('nama_situs')
    Tambah Voucher
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
            <h4 class="page-title"> <a href="{{  url()->previous() }}"><i class="fa fa-arrow-alt-circle-left text-success"></i></a> Tambah Voucher</span></h4>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">Tambah Voucher</div>
                <div class="card-body">
                    <form action="{{ route('voucher.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for='status_voucher'>Pilih Kelas</label>
                            <select class="form-control" name='course_id' id='status_voucher'>
                              <option>Pilih Kelas</option>
                              @foreach ($courses as $course)
                              <option value="{{ $course->id }}">{{ $course->nama_kelas }}</option>
                              @endforeach
                            </select>
                          </div>


                        <div class="form-group">
                            <label for="nama">Nama Voucher</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukan nama">
                        </div>

                        <div class="form-group">
                            <label for="nama">Total Diskon</label>
                            <input type="text" class="form-control" name="total_diskon" placeholder="Masukan Diskon">
                            <small id="total_diskon" class="text-muted">Diskon dalam bentuk %</small>
                        </div>

                        <div class="form-group">
                            <label for="kode">Kode Voucher</label>
                            <input type="text" class="form-control" name="kode" placeholder="Masukan Kode Voucher">
                        </div>

                        <div class="form-group">
                            <label for="nama">Kuota</label>
                            <input type="number" class="form-control" name="kuota" placeholder="1">
                        </div>

                        <div class="form-group">
                            <label for="kode">Kadaluarsa</label>
                            <input type="date" class="form-control" name="expire_date">
                        </div>

                        <div class="form-group">
                          <label for='status_voucher'>Status</label>
                          <select class="form-control" name='status_voucher' id='status_voucher'>
                            <option>Pilih Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="catatan">Catatan</label>
                          <textarea name="catatan" id="catatan" cols="30" rows="10" class="form-control" placeholder="Masukan Catatan Voucher"></textarea>
                          <small id="catatan" class="text-muted">Masukan catatan tentang voucher</small>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-blue"><i class="fa fa-save mr-1"></i>Tambah Voucher</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
