@extends('layouts.base')
@section('title', 'Tambah Arsip')
@section('konten')
    @include('layouts.errorField')
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('arsip.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="font-weight-bold" for="kategori">Kategori</label>
                    <select class="form-control form-control-solid" id="kategori" name="kategoriId">
                        @foreach ($kategori as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="font-weight-bold" for="noArsip">Nomor Arsip *</label>
                    <input class="form-control form-control-solid" id="noArsip" type="text" placeholder="Nomor Arsip"
                        name="noArsip" required />
                </div>
                <div class="mb-3">
                    <label class="font-weight-bold" for="namaArsip">Nama Arsip *</label>
                    <input class="form-control form-control-solid" id="namaArsip" type="text" placeholder="Nama Arsip"
                        name="namaArsip" required />
                </div>
                <div class="mb-3">
                    <label class="font-weight-bold" for="deskripsi">Deskripsi</label>
                    <textarea class="form-control form-control-solid" id="deskripsi" rows="3" name="deskripsi"></textarea>
                </div>
                <div class="mb-3">
                    <label class="font-weight-bold" for="fileArsip">File Arsip *</label>
                    <input type="file" name="fileArsip" class="form-control form-control-file"
                        accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" required />
                </div>
                <div class="mb-0 float-right">
                    <a href="{{ route('arsip.index') }}" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
@endsection
