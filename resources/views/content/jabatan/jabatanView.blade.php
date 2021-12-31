@extends('layouts.base')
@section('konten')
<div class="row">
    <table class="table table-striped">
    <div>
            <div class="pull-right">
                <a href="{{ URL::to('jabatan/create') }}" class="btn btn-md btn-primary">Tambah Jabatan</a>
            </div>
        </div>
        <thead>
            <tr>
                <th align="center">Id</th>
                <th align="center">Nama</th>
                <th align="center">Tanggal Buat</th>
                <th align="center">Action</th>
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
                <a href="{{ URL::to('jabatan/'.$jbt->id.'/edit') }}" class="nav-link"><i class="fas fa-edit"></i></a>
                <a href="{{ URL::to('jabatan/'.$jbt->id) }}" class="nav-link"><i class="fas fa-trash"></i></a>
                </td>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection