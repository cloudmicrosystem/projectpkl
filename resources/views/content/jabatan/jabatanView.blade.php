@extends('layouts.base')
@section('konten')
<div class="card-body table-responsive">
    <table table class="table table-bordered">
    <div>
            <div class="pull-right">
                <a href="{{ URL::to('jabatan/create') }}" class="btn btn-md btn-primary">Tambah Jabatan</a>
            </div>
        </div>
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
                <a href="{{ URL::to('jabatan/'.$jbt->id.'/edit') }}" class="nav-link"><i class="fas fa-edit"></i></a>
                <a href="{{ URL::to('jabatan/'.$jbt->id) }}" class="nav-link"><i class="fas fa-trash-alt"></i></a>
                </td>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection