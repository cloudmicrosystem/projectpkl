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
                <th  scope="col">Id</th>
                <th  scope="col">Id Kategori</th>
                <th  scope="col">Id User</th>
                <th  scope="col">No Arsip</th>
                <th  scope="col">Nama Arsip</th>
                <th  scope="col">Deskripsi</th>
                <th  scope="col">File Arsip</th>
                <th  scope="col">Action</th>
                
            </tr>
        </thead>
        <tbody>
        
        @foreach($arsip as $arsp)
            <tr>
                <td>{{ $arsp->id }}</td>
                <td>{{ $arsp->id_kategori }}</td>
                <td>{{ $arsp->id_user}}</td>
                <td>{{ $arsp->no_arsip }}</td>
                <td>{{ $arsp->nama_arsip }}</td>
                <td>{{ $arsp->deskripsi}}</td>
                <td>{{ $arsp->file_arsip}}</td>
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