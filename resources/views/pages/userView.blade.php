@extends('layouts.base')
<div class="row">
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Level</th>
                <th>ID Jabatan</th>
                
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
            </tr>
        @endforeach
        </tbody>
    </table>
</div>