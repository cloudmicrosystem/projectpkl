@extends('layouts.base')
@section('title', 'Edit Arsip')
@section('konten')
    <div class="card shadow mb-3">
        <div class="card-body">
            <form action="{{ route('arsip.update', [$arsip['0']->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="kategori">Kategori</label>
                    <select class="form-control form-control-solid" id="kategori" name="kategoriId">
                        @foreach ($kategori as $data)
                            @if ($data->id == $arsip['0']->id_kategori)
                                <option value="{{ $data->id }}" selected>{{ $data->nama_kategori }}</option>
                            @else
                                <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="noArsip">Nomor Arsip</label>
                    <input class="form-control form-control-solid" id="noArsip" type="text" placeholder="Nomor Arsip" name="noArsip" value="{{ $arsip['0']->no_arsip }}""/>
                </div>
                <div class="mb-3">
                    <label for="namaArsip">Nama Arsip</label>
                    <input class="form-control form-control-solid" id="namaArsip" type="text" placeholder="Nama Arsip" name="namaArsip" value="{{ $arsip['0']->nama_arsip }}"/>
                </div>
                <div class="mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control form-control-solid" id="deskripsi" rows="3" name="deskripsi">{{ $arsip['0']->deskripsi }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="fileArsip">File Arsip</label>
                    <input type="file" name="fileArsip" class="form-control form-control-file"
                        accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf">
                </div>
                <div class="mb-0 float-right">
                    <a href="{{ route('arsip.index') }}" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
