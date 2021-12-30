@extends('layouts.base')
@section('konten')
<form action="{{ route('kategori.store') }}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nama</label>
        <div class="col-sm-10">
        <input type="text" name="namaKategori" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan nama">
        </div>
    </div>
</form>
<form>
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection
