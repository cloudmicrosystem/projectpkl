@extends('layouts.base')
@section('konten')
<div class="card-body table-responsive">
    <table table class="table table-bordered">
    <div>
            <div class="pull-right">
                <a href="{{ URL::to('user/create') }}" class="btn btn-md btn-primary">Tambah User</a>
            </div>
        </div>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>ID Jabatan</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
        
        @foreach($user as $usr)
            <tr>
                <td>{{ $usr->id }}</td>
                <td>{{ $usr->nama }}</td>
                <td>{{ $usr->username }}</td>
                <td>{{ $usr->email }}</td>
                <td>{{ $usr->alamat }}</td>
                <td>{{ $usr->id_jabatan}}</td>
                <td>
                    <a href="{{ URL::to('user/'.$usr->id.'/edit') }}" class="nav-link"><i class="fas fa-edit"></i></a>
                    <a href="{{ URL::to('user/'.$usr->id) }}" class="nav-link"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection