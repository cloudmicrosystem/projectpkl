@extends('layouts.base')
@section('konten')
<div class="row">
    <table table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Id Kategori</th>
                <th>Id Jabatan</th>
                <th>Id User</th>
                <th>No Arsip</th>
                <th>Nama Arsip</th>
                <th>Deskripsi</th>
                <th>File Arsip</th>
                <th>Tanggal Upload</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
        
        @foreach($arsip as $arsp)
            <tr>
                <td>{{ $arsp->id }}</td>
                <td>{{ $arsp->id_kategori }}</td>
                <td>{{ $arsp->id_jabatan }}</td>
                <td>{{ $arsp->id_user}}</td>
                <td>{{ $arsp->no_arsip }}</td>
                <td>{{ $arsp->nama_arsip }}</td>
                <td>{{ $arsp->deskripsi}}</td>
                <td>{{ $arsp->file_arsip}}</td>
                <td>{{ $arsp->tanggal_upload}}</td>
                <td>
                <td>
                    <a class="nav-link" href="/">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash"></i>
                     </a>
                </td>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection