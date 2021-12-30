@extends('layouts.base')
@section('konten')
<legend>Edit Jabatan</legend>
<form action="{{ route('jabatan.edit', [$jabatan['0']->id]) }}" method="POST">
  @csrf
  @method('PUT')
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg">Nama Jabatan</label>
        <div class="col-sm-10">
            <input type="text" name="namaJabatan" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit nama" value="{{ $jabatan['0']->nama_jabatan }}">
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Simpan</button>
</form>
@endsection