@extends('layouts.base')
@section('konten')
<div class="card-body table-responsive">
    <table table class="table table-bordered">
        <div>
            <div class="pull-right">
                <a href="{{ route('arsip.create') }}" class="btn btn-md btn-primary">Tambah Data</a>
            </div>
        </div>

        <thead>
            <tr>
                <th align="center">No</th>
                <th align="center">Kategori</th>
                <th align="center">No Arsip</th>
                <th align="center">Nama Arsip</th>
                <th align="center">Deskripsi</th>
                <th align="center">File Arsip</th>
                <th align="center">Diupload oleh</th>
                <th align="center">Action</th>

            </tr>
        </thead>
        <tbody>

        @foreach($arsip as $arsp)
            <tr>
                {{-- <td>{{ $arsp->no }}</td> --}}
                <td>{{ $arsp->nama_kategori }}</td>
                <td>{{ $arsp->no_arsip }}</td>
                <td>{{ $arsp->nama_arsip }}</td>
                <td>{{ $arsp->deskripsi }}</td>
                <td>{{ $arsp->file_arsip }}</td>
                <td>{{ $arsp->nama_user }}</td>
                <td>
                    <a href="{{ route('arsip.edit', $arsp->id) }}" class="nav-link"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('arsip.destroy', $arsp->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn nav-link"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
