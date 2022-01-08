@extends('layouts.base')
@section('konten')
<h3><p class="font-weight-bold">Edit Disposisi</p></h3><br>
    {{-- <form action="{{ route('disposisi.update',[$disposisi['0']->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Nama Arsip Surat</label>
        <div class="col-sm-10" name="arsipId">
        <select name="arsipId" class="custom-select mr-sm-2">
            @foreach ($arsip as $arp)
                @if($arp->id == $disposisi['0']->id_arp)
                    <option value="{{ $arp->nama_arsip }}" selected>{{ $arp->nama_arsip}}</option>
                @else
                    <option value="{{ $arp->nama_arsip }}">{{ $arp->nama_arsip}}"></option>
                @endif
            @endforeach
        </select>
        </div>
      </div> --}}
    <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">No Surat</label>
        <div class="col-sm-10">
        <input type="text" name="noSurat" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan no surat" value="{{ $disposisi['0']->no_surat}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Asal Surat</label>
        <div class="col-sm-10">
        <input type="text" name="asalSurat" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan asal surat" value="{{ $disposisi['0']->asal_surat}}">
        </div>
    </div>
    {{-- <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Ditujukan</label>
        <div class="col-sm-10">
        <input type="text" name="ditujukan" class="form-control form-control-lg" id="colFormLabelLg" placeholder="masukkan ditujukan" value="{{ $disposisi['0']->ditujukan}}"> --}}
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Simpan</button>
    </form>
@endsection
