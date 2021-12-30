@extends('layouts.base')
@section('konten')
<form action="{{ route('arsip.store') }}" method="POST">
  @csrf
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">No Arsip</label>
    <div class="col-sm-10">
      <input type="number" name="noArsip" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan no arsip">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nama Arsip</label>
    <div class="col-sm-10">
      <input type="text" name="namaArsip" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan nama arsip">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
    <div class="col-sm-10">
    <textarea name="deskripsi" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan deskripsi">
    </textarea>
      </div>
  </div>
    <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">File Arsip</label>
    <div class="col-sm-10">
      <input type="text" name="fileArsip" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan file arsip">
    </div>
  </div>
  </form>
<form>
  <button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection