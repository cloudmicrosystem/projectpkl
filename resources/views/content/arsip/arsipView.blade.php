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
                <td><center>No</center></td>
                <td><center>Nama Arsip</center></td>
                <td><center>Nomor Arsip</center></td>
                <td><center>Kategori</center></td>
                <td><center>Deskripsi</center></td>
                <td><center>Lihat</center></td>
                <td><center>Action</center></td>
            </tr>
        </thead>
        <tbody>
            @foreach($arsip as $arsp)
            <tr>
                <td><center>{{ $loop->iteration }}</center></td>
                <td>{{ $arsp->nama_kategori }}</td>
                <td>{{ $arsp->no_arsip }}</td>
                <td>{{ $arsp->nama_arsip }}</td>
                <td>{{ $arsp->deskripsi }}</td>
<<<<<<< HEAD
                <td><a href="{{url('/storage/arsip/', $arsp->file_arsip)}}" target="_blank">lihat</a></td>
                <td>
                    <button class="btn nav-link"><a href="{{ route('arsip.edit', $arsp->id)}}"><i class="fas fa-edit"></i></a></button>
                </td>
                <td>
=======
                <td><a href="{{url('/storage/arsip/', $arsp->file_arsip)}}" target="_blank"><center>lihat</center></a></td>
>>>>>>> 8e71b4cca543c7b1308ff35c377b651e6a0ff7ae
                <td><div class="row">
                    <button class="btn nav-link col-sm-4"><a href="{{ route('arsip.edit', $arsp->id)}}"><i class="fas fa-edit"></i></a></button>
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
