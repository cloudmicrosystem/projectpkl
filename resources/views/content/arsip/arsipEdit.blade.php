@extends('layouts.base')
@section('konten')
    <legend>Edit Arsip</legend>
    <form action="{{ route('arsip.update', [$arsip['0']->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Kategori</label>
            <div class="col-sm-10" name="idJabatan">
                <select name="kategoriId" class="custom-select mr-sm-2">
                    @foreach ($kategori as $kat)
                        @if ($kat->id == $arsip['0']->id_kategori)
                            <option value="{{ $kat->id }}" selected>{{ $kat->nama_kategori }}</option>
                        @else
                            <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                        @endif
                    @endforeach
                </select>
            </div>  
        </div>
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
                <textarea name="deskripsi" class="form-control form-control-lg" id="colFormLabelLg" placeholder="edit deskripsi">{{ $arsip['0']->deskripsi }}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="comFormLabellg" class="col-sm-2 col-form-label-lg">File Arsip</label>
            <div class="col-sm-10">
                {{-- <input type="text" name="fileArsip" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit file arsip" value="{{ $arsip['0']->file_Arsip }}"> --}}
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
