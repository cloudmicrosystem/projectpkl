@extends('layouts.base')
@section('konten')
<legend>Edit User</legend>
<form>
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="in_nama" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit nama">
        </div>
    </div>
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg">Username</label>
        <div class="col-sm-10">
            <input type="text" name="in_username" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit username">
        </div>
    </div>
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg">Password</label>
        <div class="col-sm-10">
            <input type="password" name="in_password" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit password">
        </div>
    </div>
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg">Email</label>
        <div class="col-sm-10">
            <input type="email" name="in_email" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit email">
        </div>
    </div>
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg">Alamat</label>
        <div class="col-sm-10">
            <input type="text" name="in_alamat" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit alamat">
        </div>
    </div>
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg">Jabatan</label>
        <select class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        </div>
    </div>
<a href="#" class="btn btn-primary btn-lg">Simpan</a>
</form>
@endsection