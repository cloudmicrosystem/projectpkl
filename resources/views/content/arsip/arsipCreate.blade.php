@extends('layouts.base')
@section('konten')
    <legend>Tambah Arsip</legend>
    <form action="{{ route('arsip.store') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="kategoriId" class="col-sm-2 col-form-label-lg">Kategori</label>
            <select name="kategoriId" class="custom-select mr-sm-2">
                @foreach ($kategori as $kat)
                    <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group row">
            <label for="comFormLabellg" class="col-sm-2 col-form-label-lg">No Arsip</label>
            <div class="col-sm-10">
                <input type="text" name="noArsip" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit no arsip">
            </div>
        </div>

        <div class="form-group row">
            <label for="comFormLabellg" class="col-sm-2 col-form-label-lg">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="namaArsip" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="edit nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
            <div class="col-sm-10">
                <textarea name="deskripsi" class="form-control form-control-lg" id="colFormLabelLg" placeholder="edit deskripsi"></textarea>
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
