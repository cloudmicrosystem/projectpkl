@extends('layouts.base')
@section('title', 'User')
@section('konten')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('user.create') }}" class="btn btn-success btn-icon-split btn-sm float-right">
            <span class="icon">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">
                Tambah
            </span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="viewTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>
                            <center>Nama</center>
                        </th>
                        <th>
                            <center>Username</center>
                        </th>
                        <th>
                            <center>Email</center>
                        </th>
                        <th>
                            <center>Alamat</center>
                        </th>
                        <th>
                            <center>Jabatan</center>
                        </th>
                        <th>
                            <center>Action</center>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $usr)
                        <tr>
                            <td>
                                <center>{{ $loop->iteration }}</center>
                            </td>
                            <td>{{ $usr->nama }}</td>
                            <td>{{ $usr->username }}</td>
                            <td>{{ $usr->email }}</td>
                            <td>{{ $usr->alamat }}</td>
                            <td>{{ $usr->nama_jabatan }}</td>
                            <td>
                                <a href="{{ route('user.edit', $usr->id) }}" class="btn btn-warning btn-sm float-left mx-2"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('user.destroy', $usr->id) }}" method="POST" class="float-left">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                @include('sweetalert::alert')
            </table>
        </div>
    </div>
</div>
@endsection
