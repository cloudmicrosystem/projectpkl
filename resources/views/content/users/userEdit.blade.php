@extends('layouts.base')
@section('title', 'Edit User')
@section('konten')
    @include('layouts.errorField')
    <div class="card shadow mb-3">
        <div class="card-body">
            <form action="{{ route('user.update', [$user['0']->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="namaUser" class="font-weight-bold">Nama</label>
                    <input type="text" name="namaUser" class="form-control form-control-solid" id="namaUser"
                        placeholder="Nama" value="{{ $user['0']->nama }}" readonly>
                </div>
                {{-- <div class="mb-3">
                    <label for="username" class="font-weight-bold">Username</label>
                    <input type="text" name="username" class="form-control form-control-solid" id="username"
                        placeholder="Username" value="{{ $user['0']->username }}" readonly>
                </div> --}}
                {{-- <div class="mb-3">
                    <label for="password" class="font-weight-bold">Password</label>
                    <input type="password" name="password" class="form-control form-control-solid" id="password"
                        placeholder="Password">
                </div>
                <div class="mb-3">
                    <label for="email" class="font-weight-bold">Email</label>
                    <input type="email" name="email" class="form-control form-control-solid" id="email" placeholder="Email"
                        value="{{ $user['0']->email }}" readonly>
                </div> --}}
                <div class="mb-3">
                    <label for="idJabatan" class="font-weight-bold">Jabatan</label>
                    <select class="form-control form-control-solid" name="idJabatan" value="{{ $user['0']->id_jabatan }}">
                        @foreach ($jabatan as $data)
                            @if ($user['0']->id_jabatan == $data->id)
                                <option value="{{ $data->id }}" selected>{{ $data->nama_jabatan }}</option>
                            @else
                                <option value="{{ $data->id }}">{{ $data->nama_jabatan }}</option>
                            @endif
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
