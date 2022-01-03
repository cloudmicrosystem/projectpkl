@extends('layouts.base')
@section('konten')
<div class="card-body table-responsive">
    <table id="viewTable" class="table table-bordered" style="width:100%">
    <div>
            <div class="pull-right">
            <a href="{{ route('jabatan.create') }}"><button class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</button></a>
            </div>
        </div>
        <thead>

            <tr>
                <th align="center">No</th>
                <th align="center">Nama</th>
                <th align="center">Tanggal Buat</th>
                <th align="center">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($jabatan as $jbt)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $jbt->nama_jabatan }}</td>
                <td>{{ $jbt->created_at }}</td>
                <td>
                    <button class="btn nav-link"><a href="{{ route('jabatan.edit', $jbt->id)}}"><i class="fas fa-edit"></i></a></button>
                    <form action="{{ route('jabatan.destroy', $jbt->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn nav-link"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection