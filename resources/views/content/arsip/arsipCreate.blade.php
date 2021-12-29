@extends('layouts.base')
@section('konten')
<form action="{{ route('arsip.store') }}" method="POST">
  @csrf
  <!-- <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Id Kategori</label>
    <div class="col-sm-10">
      <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan id kategori">
    </div>
  </div> -->
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">No Arsip</label>
    <div class="col-sm-10">
      <input type="number" name="in_no_arsip" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan no arsip">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nama Arsip</label>
    <div class="col-sm-10">
      <input type="text" name="in_nama_arsip"class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan nama arsip">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
    <div class="col-sm-10">
      <input type="text" name="deskripsi" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan deskripsi">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Tanggal Upload</label>
    <div class="col-sm-10">
      <input type="date" name="in_tanggal_upload" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan tanggal upload">
    </div>
  </div>
  <div class="form-group row">
    <label for="exampleFormControlFile1" class="col-sm-2 col-form-label col-form-label-lg">File Arsip</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection