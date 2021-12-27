@extends('layouts.base')
@section('konten')
<div class="row">
    <table table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Tanggal Buat</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
        
        @foreach($jabatan as $jbt)
            <tr>
                <td>{{ $jbt->id }}</td>
                <td>{{ $jbt->nama_jabatan }}</td>
                <td>{{ $jbt->created_at }}</td>
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