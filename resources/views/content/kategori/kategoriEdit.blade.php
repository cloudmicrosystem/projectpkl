@extends('layouts.base')
@section('konten')
<legend>Edit Kategori</legend>
<form action="{{ route('kategori.edit', [$kategori['0']->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="namaKategori" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit nama" value="{{ $kategori['0']->nama_kategori }}">
        </div>
    </div>
</form>
<form>
    <button class="btn btn-primary" type="submit">Simpan</button>
</form>
@endsection