@extends('layouts.base')
@section('title', 'Edit Kategori')
@section('konten')
    @include('layouts.errorField')
    <div class="card shadow mb-3">
        <div class="card-body">
            <form action="{{ route('kategori.update', [$kategori['0']->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="namaKategori" class="font-weight-bold">Nama</label>
                    <input type="text" name="namaKategori" class="form-control form-control-solid" id="namaKategori"
                        placeholder="Nama" value="{{ $kategori['0']->nama_kategori }}">
                </div>
                {{-- <div class="mb-3">
                    <label for="kodeKategori" class="font-weight-bold">Kode Kategori</label>
                    <input type="text" class="form-control form-control-solid" name="kodeKategori"
                        placeholder="Kode Kategori" value="">
                </div> --}}
                <div class="mb-0 float-right">
                    <a href="{{ route('kategori.index') }}" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
