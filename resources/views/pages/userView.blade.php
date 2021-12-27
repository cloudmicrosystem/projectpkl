@extends('layouts.base')
@section('content')
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
                <button class="btn btn-primary " ><i class="fas fa-edit"></button>
                <button class="btn btn-primary " ><i class="fas fa-trash"></button>
                </td>
                </tr>
        @endforeach
        </tbody>
    </table>
@endsection