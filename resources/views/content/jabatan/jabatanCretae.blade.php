@extends('layouts.base')
@section('konten')
<h3><p class="font-weight-bold">Tambah Jabatan</p></h3><br>
@include('layouts.errorField')
<form action="{{ route('jabatan.store') }}" method="POST">
  @csrf
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Nama</label>
    <div class="col-sm-10">
      <input type="text" name="namaJabatan" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Nama">
    </div>
  </div>
    <button class="btn btn-primary" type="submit">Simpan</button>
  </form>
@endsection
