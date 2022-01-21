@extends('layouts.base')
@section('konten')
    <h3>
        <p class="font-weight-bold">Tambah Jabatan</p>
    </h3><br>
    @include('layouts.errorField')

    <form action="{{ route('jabatan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="namaJabatan">Nama Jabatan</label>
            <input class="form-control form-control-solid" id="namaJabatan" type="text" placeholder="Nama Jabatan" name="namaJabatan" required/>
        </div>
        <div class="mb-3">
            <label for="kodeJabatan">Kode Jabatan</label>
            <input class="form-control form-control-solid" id="kodeJabatan" type="text" placeholder="Nama Jabatan" name="kodeJabatan" required/>
        </div>
        <div class="mb-0 float-right">
            <a href="{{ route('jabatan.index') }}" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
@endsection
