@extends('layouts.base')
@section('konten')
<div class="card-body table-responsive">
    <table id="viewTable" class="table table-bordered" style="width:100%">
    <div>
            <div class="pull-right">
            <a href="{{ route('arsip.create') }}"><button class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</button></a>
            </div>
        </div>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Arsip</td>
                <td>Nomor Arsip</td>
                <td>Kategori</td>
                <td>Deskripsi</td>
                <td>Lihat</td>
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
                <td><a href="{{url('/download', $arsp->file_arsip)}}" target="_blank">lihat</a></td>
                <td>
                    <button class="btn nav-link"><a href="{{ route('arsip.edit', $arsp->id)}}"><i class="fas fa-edit"></i></a></button>
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
