@extends('layouts.base')
@section('konten')
<div class="card-body table-responsive">
    <table table class="table table-bordered">
        <div>
            <div class="pull-right">
            <form action="{{ route('kategori.create') }}" method="POST">
                @method('PUT')
                @csrf
                <button type="submit" class="btn btn-md btn-primary">Tambah Arsip</button>
            </form>
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
                    <form action="{{ route('arsip.edit', $arsp->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <button type="submit" class="btn nav-link"><i class="fas fa-edit"></i></button>
                    </form>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('.data').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        extends: 'print',
                        messageTop: 'Data sukses!!!'
                    }  
                ]
            } );
        });
    </script>
@endsection
