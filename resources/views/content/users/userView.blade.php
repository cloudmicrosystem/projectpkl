@extends('layouts.base')
@section('konten')
<div class="row">
    <table table class="table table-striped table-responsive">
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
                <th>Level</th>
                <th>ID Jabatan</th>
                <th>Tanggal Buat</th>
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
                <td>{{ $usr->level}}</td>
                <td>{{ $usr->id_jabatan}}</td>
                <td>{{ $usr->created_at}}</td>
                <td>
                    <a href="{{ URL::to('user/'.$usr->id.'/edit') }}" class="nav-link"><i class="fas fa-edit"></i></a>
                    <a href="{{ URL::to('user/'.$usr->id) }}" class="nav-link"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection