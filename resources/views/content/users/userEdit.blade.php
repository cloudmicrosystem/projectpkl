@extends('layouts.base')
@section('konten')
<h3><p class="font-weight-bold">Edit User</p></h3><br>
<form action="{{ route('user.edit', [$user['0']->id]) }}" method="POST">
  @csrf
  @method('PUT')
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg font-weight-bold">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="namaUser" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit nama" value="{{ $user['0']->nama }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg font-weight-bold">Username</label>
        <div class="col-sm-10">
            <input type="text" name="username" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit username" value="{{ $user['0']->username }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg font-weight-bold">Password</label>
        <div class="col-sm-10">
            <input type="password" name="password" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit password" value="{{ $user['0']->password }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg font-weight-bold">Email</label>
        <div class="col-sm-10">
            <input type="email" name="email" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit email" value="{{ $user['0']->email }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg font-weight-bold">Alamat</label>
        <div class="col-sm-10">
            <input type="text" name="alamatUser" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit alamat" value="{{ $user['0']->alamat }}">
        </div>
    </div>
    <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Jabatan</label>
    <div class="col-sm-10" name="idJabatan" value="{{ $user['0']->id_jabatan }}">
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
