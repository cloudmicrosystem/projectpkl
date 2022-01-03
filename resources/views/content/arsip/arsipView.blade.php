@extends('layouts.base')
@section('konten')
<div class="card-body table-responsive">
    <table id="viewTable">
    <div>
            <div class="pull-right">
            <form action="{{ route('jabatan.create') }}" method="POST">
                @method('PUT')
                @csrf
                <button type="submit" class="btn btn-md btn-primary">Tambah Arsip</button>
            </form>
            </div>
        </div>
        <thead>
        <thead>
            <tr>
                <td>No</td>
                <td>Nomor Arsip</td>
                <td>Nama Arsip</td>
                <td>Kategori</td>
                <td>Deskripsi</td>
                <td>File Arsip</td>
                <td>Diupload Oleh</td>
                {{-- <td>Lihat</td> --}}
                {{-- <td>Download</td> --}}
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($arsip as $arsp)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $arsp->nama_kategori }}</td>
                <td>{{ $arsp->no_arsip }}</td>
                <td>{{ $arsp->nama_arsip }}</td>
                <td>{{ $arsp->deskripsi }}</td>
                <td>{{ $arsp->file_arsip }}</td>
                {{-- <td><a href="{{url('/view'), $arsp->view}}">lihat></a></td> --}}
                {{-- <td><a href="{{url('/download'), $arsp->fileArsip}}">download</a></td> --}}
                <td>{{ $arsp->nama_user }}</td>
                <td>
                    <a href="{{ route('arsip.edit', $arsp->id)}}"><i class="fas fa-edit"></i></a>
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
</div>
@endsection
