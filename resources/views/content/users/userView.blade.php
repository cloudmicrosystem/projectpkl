@extends('layouts.base')
@section('konten')
<div class="card-body table-responsive">
    @if (session('message'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
         {{ session('message') }}
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
   </div>
@endif
    <div class="row">
        <div class="pull-right">
            <a href="{{ route('user.create') }}"><button class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</button></a>
        </div>
    </div>
    <table id="viewTable" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th align="center">No</th>
                <th align="center">Nama</th>
                <th align="center">Username</th>
                <th align="center">Email</th>
                <th align="center">Alamat</th>
                <th align="center">Jabatan</th>
                <th align="center">Action</th>

            </tr>
        </thead>
        <tbody>

        @foreach($user as $usr)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $usr->nama }}</td>
                <td>{{ $usr->username }}</td>
                <td>{{ $usr->email }}</td>
                <td>{{ $usr->alamat }}</td>
                <td>{{ $usr->nama_jabatan}}</td>
                <td><div class="row">
                    <button class="btn nav-link col-sm-4"><a href="{{ route('user.edit', $usr->id)}}"><i class="fas fa-edit"></i></a></button>
                    <form action="{{ route('user.destroy', $usr->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn nav-link col-sm-4"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
