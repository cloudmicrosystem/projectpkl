@extends('layouts.base')
@section('konten')
<legend>Edit Kategori</legend>
<form>
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="in_nama_kategori" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit nama">
        </div>
    </div>
</form>
<form>
<a href="#" class="btn btn-primary btn-lg">Simpan</a>
</form>
@endsection