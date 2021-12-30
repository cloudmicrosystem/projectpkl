@extends('layouts.base')
@section('konten')
<legend>Edit Arsip</legend>
<form action="{{ route('arsip.edit', [$arsip['0']->id]) }}" method="POST">
  @csrf
  @method('PUT')
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg">No Arsip</label>
        <div class="col-sm-10">
            <input type="text" name="noArsip" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit no arsip" value="{{ $arsip['0']->no_arsip }}">
        </div>
    </div>

    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="namaArsip" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit nama" value="{{ $arsip['0']->nama_arsip }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
        <div class="col-sm-10">
            <textarea name="deskripsi" class="form-control form-control-lg" id="colFormLabelLg" placeholder="edit deskripsi" value="{{ $arsip['0']->deskripsi }}">
    </textarea>
      </div>
  </div>
    <div class="form-group row">
        <label for="comFormLabellg" class="col-sm-2 col-form-label-lg">File Arsip</label>
        <div class="col-sm-10">
            <input type="text" name="fileArsip" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit file arsip" value="{{ $arsip['0']->file_Arsip }}">
        </div>
    </div>
<button class="btn btn-primary" type="submit">Simpan</button>
</form>
@endsection