@extends('layouts.base')
@section('konten')
<form action="{{ route('user.store') }}" method="POST">
  @csrf
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nama</label>
    <div class="col-sm-10">
      <input type="text" name="namaUser" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Username</label>
    <div class="col-sm-10">
      <input type="text" name="username" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan username">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan password">
    </div>
</div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan alamat">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Jabatan</label>
    <div class="col-sm-10" name="idJabatan">
      <select class="form-control">
        @foreach($jabatan as $jbt)
          <option value="{{ $jbt->id }}">{{ $jbt->nama_jabatan}}</option>
       @endforeach
      </select>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection