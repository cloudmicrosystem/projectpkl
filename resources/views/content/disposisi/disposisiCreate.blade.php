@extends('layouts.base')
@section('konten')
<h3><p class="font-weight-bold">Tambah User</p></h3><br>
<form action="{{ route('disposisi.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Nama Arsip Surat</label>
    <div class="col-sm-10" >
      <select class="form-control form-control-lg" name="arsipId">
        @foreach($arsip as $arp)
          <option value="{{ $arp->nama_arsip }}">{{ $arp->nama_arsip}}</option>
       @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">No Surat</label>
    <div class="col-sm-10">
      <input type="text" name="noSurat" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan no surat">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Asal Surat</label>
    <div class="col-sm-10">
      <input type="text" name="asalSurat" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan asal surat">
    </div>
</div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Ditujukan</label>
    <div class="col-sm-10">
      <input type="text" name="ditujukan" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan ditujukan">
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Simpan</button>
</form>
@endsection
