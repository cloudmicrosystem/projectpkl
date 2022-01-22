@extends('layouts.base')
@section('title', 'Tambah Jabatan')
@section('konten')
    @include('layouts.errorField')
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('jabatan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="font-weight-bold" for="namaJabatan">Nama Jabatan</label>
                    <input class="form-control form-control-solid" id="namaJabatan" type="text" placeholder="Nama Jabatan"
                        name="namaJabatan" required />
                </div>
                <div class="mb-3">
                    <label class="font-weight-bold" for="kodeJabatan">Kode Jabatan</label>
                    <input class="form-control form-control-solid" id="kodeJabatan" type="text" placeholder="Nama Jabatan"
                        name="kodeJabatan" required />
                </div>
                <div class="mb-0 float-right">
                    <a href="{{ route('jabatan.index') }}" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
