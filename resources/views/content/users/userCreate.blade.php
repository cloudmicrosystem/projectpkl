@extends('layouts.base')
@section('konten')
<form action="{{ route('user.store') }}" method="POST">
  @csrf
<!-- <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Id</label>
    <div class="col-sm-10">
      <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan id">
    </div>
  </div> -->
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nama</label>
    <div class="col-sm-10">
      <input type="text" name="in_nama" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Username</label>
    <div class="col-sm-10">
      <input type="text" name="in_username" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan username">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
    <div class="col-sm-10">
      <input type="email" name="in_email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan alamat">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Level</label>
    <div class="col-sm-10">
      <input type="text" name="in_level" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan level">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
    <div class="col-sm-10">
      <input type="password" name="in_password" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan password">
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection