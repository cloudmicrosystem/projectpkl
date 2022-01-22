@extends('layouts.base')
@section('title', 'Tambah User')
@section('konten')
    @include('layouts.errorField')
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="font-weight-bold" for="namaUser">Nama</label>
                    <input class="form-control form-control-solid" id="namaUser" type="text" placeholder="Nama"
                        name="namaUser" required>
                </div>
                <div class="mb-3">
                    <label class="font-weight-bold" for="username">Username</label>
                    <input type="text" name="username" class="form-control form-control-solid" id="username"
                        placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <label class="font-weight-bold" for="password">Password</label>
                    <input type="password" name="password" class="form-control form-control-solid" id="password"
                        placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <label class="font-weight-bold" for="email">Email</label>
                    <input type="email" name="email" class="form-control form-control-solid" id="email" placeholder="Email"
                        required>
                </div>
                <div class="mb-3">
                    <label class="font-weight-bold" for="jabatan">Jabatan</label>
                    <select class="form-control form-control-solid" name="idJabatan">
                        @foreach ($jabatan as $jbt)
                            <option value="{{ $jbt->id }}">{{ $jbt->nama_jabatan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-0 float-right">
                    <a href="{{ route('user.index') }}" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
