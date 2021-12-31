@extends('layouts.base')
@section('konten')
<h3><p class="font-weight-bold">Tambah User</p></h3><br>
<form action="{{ route('user.store') }}" method="POST">
  @csrf
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Nama</label>
    <div class="col-sm-10">
      <input type="text" name="namaUser" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Username</label>
    <div class="col-sm-10">
      <input type="text" name="username" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan username">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan password">
    </div>
</div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan email">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Jabatan</label>
    <div class="col-sm-10" name="idJabatan">
      <select class="form-control form-control-lg">
        @foreach($jabatan as $jbt)
          <option value="{{ $jbt->id }}">{{ $jbt->nama_jabatan}}</option>
       @endforeach
      </select>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Simpan</button>
</form>
@endsection