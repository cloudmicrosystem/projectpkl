@extends('layouts.base')
@section('title', 'Edit Jabatan')
@section('konten')
@include('layouts.errorField')
<div class="card shadow mb-3">
    <div class="card-body">
    <form action="{{ route('jabatan.update', [$jabatan['0']->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="font-weight-bold" for="namaJabatan">Nama Jabatan</label>
                <input type="text" name="namaJabatan" class="form-control form-control-solid" id="namaJabatan" placeholder="Nama" value="{{ $jabatan['0']->nama_jabatan }}">
        </div>
        <div class="mb-0 float-right">
            <a href="{{ route('jabatan.index') }}" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>
</div>>
@endsection
