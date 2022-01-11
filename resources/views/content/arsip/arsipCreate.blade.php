@extends('layouts.base')
@section('konten')
<h3><p class="font-weight-bold">Tambah Arsip</p></h3><br>
@include('layouts.errorField')
    <form action="{{ route('arsip.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Kategori</label>
            <div class="col-sm-10" name="kategoriId">
                <select name="kategoriId" class="form-control form-control-lg">
                    @foreach ($kategori as $kat)
                        <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="comFormLabellg" class="col-sm-2 col-form-label-lg font-weight-bold">No Arsip</label>
            <div class="col-sm-10">
                <input type="text" name="noArsip" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="No Arsip">
            </div>
        </div>

        <div class="form-group row">
            <label for="comFormLabellg" class="col-sm-2 col-form-label-lg font-weight-bold">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="namaArsip" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="Nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Deskripsi</label>
            <div class="col-sm-10">
                <textarea name="deskripsi" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Deskripsi"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="comFormLabellg" class="col-sm-2 col-form-label-lg font-weight-bold">File Arsip</label>
            <div class="col-sm-10">
                <div class="input-group mb-3">
                    <input type="file" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" name="fileArsip" class="form-control form-control-lg" id="inputGroupFile02" />
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
