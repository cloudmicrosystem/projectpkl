@extends('layouts.base')
@section('konten')
<div class="row">
    <table class="table table-striped">
    <div>
            <div class="pull-right">
                <a href="{{ URL::to('user/create') }}" class="btn btn-md btn-primary">Tambah User</a>
            </div>
        </div>
        <thead>
            <tr>
                <th align="center">Id</th>
                <th align="center">Nama</th>
                <th align="center">Username</th>
                <th align="center">Email</th>
                <th align="center">Alamat</th>
                <th align="center">ID Jabatan</th>
                <th align="center">Action</th>
                
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
                    <a href="{{ URL::to('user/'.$usr->id) }}" class="nav-link"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection