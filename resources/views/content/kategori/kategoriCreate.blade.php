@extends('layouts.base')
@section('konten')
<h3><p class="font-weight-bold">Tambah Kategori</p></h3><br>
<form action="{{ route('kategori.store') }}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label font-weight-bold">Nama</label>
        <div class="col-sm-10">
        <input type="text" name="namaKategori" class="form-control" id="colFormLabelLg" placeholder="nama kategori">
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Simpan</button>
</form>
@endsection
