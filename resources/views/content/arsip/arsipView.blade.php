@extends('layouts.base')
@section('konten')
<div class="card-body table-responsive">
    @if (session('message'))
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
    </div>
@endif
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
<<<<<<< HEAD
                <td colspan="2">Action</td>
=======
                <td><center>Action</center></td>
>>>>>>> 84c72ec6ad832b7e0a5a38b3a718052033031229
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
                <td><a href="{{url('/storage/arsip/', $arsp->file_arsip)}}" target="_blank">lihat</a></td>
<<<<<<< HEAD
                <td>
                    <button class="btn nav-link"><a href="{{ route('arsip.edit', $arsp->id)}}"><i class="fas fa-edit"></i></a></button>
                </td>
                <td>
=======
                <td><div class="row">
                    <button class="btn nav-link col-sm-4"><a href="{{ route('arsip.edit', $arsp->id)}}"><i class="fas fa-edit"></i></a></button>
>>>>>>> 0e275ef243603213298e2f6e76f7f563e84c20f8
                    <form action="{{ route('arsip.destroy', $arsp->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn nav-link col-sm-4"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
