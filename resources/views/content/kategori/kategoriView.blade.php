@extends('layouts.base')
@section('konten')
<div class="row">
    <table table class="table table-striped table-responsive">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Tanggal Buat</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
        
        @foreach($kategori as $ktg)
            <tr>
                <td>{{ $ktg->id }}</td>
                <td>{{ $ktg->nama_kategori }}</td>
                <td>{{ $ktg->created_at}}</td>
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