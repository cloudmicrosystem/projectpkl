@extends('layouts.base')
@section('title', 'Tambah Kategori')
@section('konten')
    @include('layouts.errorField')
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="font-weight-bold" for="namaKategori">Nama *</label>
                    <input type="text" name="namaKategori" class="form-control form-control-solid" id="namaKategori"
                        placeholder="Nama" required>
                </div>
                <div class="mb-0 float-right">
                    <a href="{{ route('kategori.index') }}" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
