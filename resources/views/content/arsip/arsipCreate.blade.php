@extends('layouts.base')
@section('konten')
    <h3>
        <p class="font-weight-bold">Tambah Arsip</p>
    </h3><br>
    @include('layouts.errorField')

    <form action="{{ route('arsip.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="kategori">Kategori</label>
            <select class="form-control form-control-solid" id="kategori" name="kategoriId">
                @foreach ($kategori as $data)
                    <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="noArsip">Nomor Arsip</label>
            <input class="form-control form-control-solid" id="noArsip" type="text" placeholder="Nomor Arsip" name="noArsip" />
        </div>
        <div class="mb-3">
            <label for="namaArsip">Nama Arsip</label>
            <input class="form-control form-control-solid" id="namaArsip" type="text" placeholder="Nama Arsip" name="namaArsip" />
        </div>
        <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control form-control-solid" id="deskripsi" rows="3" name="deskripsi"></textarea>
        </div>
        <div class="mb-3">
            <label for="fileArsip">File Arsip</label>
            <input type="file" name="fileArsip" class="form-control form-control-file" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf">
        </div>
        <div class="mb-0 float-right">
            <a href="{{ route('arsip.index') }}" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
@endsection
