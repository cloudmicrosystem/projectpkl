@extends('layouts.base')
@section('konten')
<form>
<!-- <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Id</label>
    <div class="col-sm-10">
      <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan id">
    </div>
  </div> -->
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nama</label>
    <div class="col-sm-10">
      <input type="text" name="in_nama_jabatan" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan nama">
    </div>
  </div>
</form>
  </div>
  <a href="#" class="btn btn-primary btn-lg" >Simpan</a>
  <a href="#" class="btn btn-primary btn-lg">Cancel</a>
</form>
@endsection