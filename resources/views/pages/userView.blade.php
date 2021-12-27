@extends('layouts.base')
@section('konten')
<div class="row">
    <table table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Level</th>
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
                <td>{{ $usr->level}}</td>
                <td>{{ $usr->id_jabatan}}</td>
                <td>
                    <a class="nav-link" href="/">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash"></i>
                     </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection