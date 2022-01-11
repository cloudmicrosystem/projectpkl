@extends('layouts.base')
@section('konten')
<h3><p class="font-weight-bold">Edit Kategori</p></h3><br>
@include('layouts.errorField')
<form action="{{ route('kategori.update', [$kategori['0']->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg font-weight-bold">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="namaKategori" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit nama" value="{{ $kategori['0']->nama_kategori }}">
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Simpan</button>
</form>
@endsection
