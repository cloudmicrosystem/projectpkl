@extends('layouts.base')
@section('konten')
<legend>Edit Arsip</legend>
<form>
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg">No Arsip</label>
        <div class="col-sm-10">
            <input type="text" name="in_no_arsip" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit no arsip">
        </div>
    </div>
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="in_nama_arsip" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit nama">
        </div>
    </div>
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg">Deskripsi</label>
        <div class="col-sm-10">
            <input type="text" name="in_deskripsi" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="deskripsi">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleFormControlFile1" class="col-sm-2 col-form-label col-form-label-lg">File Arsip</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
</form>
<form>
<a href="#" class="btn btn-primary btn-lg">Simpan</a>
</form>
@endsection