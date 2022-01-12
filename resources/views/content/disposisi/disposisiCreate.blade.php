@extends('layouts.base')
@section('konten')
<h3><p class="font-weight-bold">Tambah Disposisi</p></h3><br>
<form action="{{ route('disposisi.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Nama Arsip</label>
    <div class="col-sm-10" name=arsipId>
      <select name="arsipId" class="form-control form-control-lg">
       @foreach($arsip as $arp)
          <option value="{{ $arp->id }}">{{ $arp->nama_arsip}}</option>
       @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">No Surat</label>
    <div class="col-sm-10">
      <input type="text" name="noSurat" class="form-control form-control-lg" id="colFormLabelLg" placeholder="No Surat">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Asal Surat</label>
    <div class="col-sm-10">
      <input type="text" name="asalSurat" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Asal Surat">
    </div>
  </div>
<div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Diteruskan</label>
    <div class="col-sm-10" name="jabatanId">
    <select name="jabatanId" class="form-control form-control-lg">
        @foreach ($jabatan as $jbt)
            @if($jbt->id == $jabatan['0']->nama_jabatan)
                <option value="{{ $jbt->id }}" selected>{{$jbt->nama_jabatan}}</option>
            @else
                <option value="{{ $jbt->id}}">{{ $jbt->nama_jabatan}}</option>
            @endif
        @endforeach
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Status</label>
    <div class="col-sm-10">
    <input type="text" name="status" class="form-control form-control-lg" id="colFormLabelLg" placeholder="status" >
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Simpan</button>
</form>
@endsection
