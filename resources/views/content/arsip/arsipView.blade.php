@extends('layouts.base')
@section('konten')
<div class="row">
    <table table class="table table-striped table-responsive">
        <div>
            <div class="pull-right">
                <a href="{{ URL::to('arsip/create') }}" class="btn btn-md btn-primary">Tambah Data</a>
            </div>
        </div>

        <thead>
            <tr>
                <th>Id</th>
                <th>Kategori</th>
                <th>No Arsip</th>
                <th>Nama Arsip</th>
                <th>Deskripsi</th>
                <th>File Arsip</th>
                <th>Diupload oleh</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
        
        @foreach($arsip as $arsp)
            <tr>
                <td>{{ $arsp->id }}</td>
                <td>{{ $arsp->nama_kategori }}</td>
                <td>{{ $arsp->no_arsip }}</td>
                <td>{{ $arsp->nama_arsip }}</td>
                <td>{{ $arsp->deskripsi }}</td>
                <td>{{ $arsp->file_arsip }}</td>
                <td>{{ $arsp->nama_user }}</td>
                <td>
                <td>
                    <a href="{{ URL::to('arsip/'.$arsp->id.'/edit') }}" class="nav-link"><i class="fas fa-edit"></i></a>
                    <a href="{{ URL::to('arsip/'.$arsp->id) }}" class="nav-link"><i class="fas fa-trash"></i></a>
                </td>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection