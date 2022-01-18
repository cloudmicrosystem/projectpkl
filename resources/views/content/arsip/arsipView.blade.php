@extends('layouts.base')
@section('konten')

<div class="pull-right">
    <a href="{{ route('arsip.create') }}"><button class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</button></a>
</div>
<div class="card-body table-responsive">
    <table id="viewTable" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th><center>No</center></th>
                <th><center>Nama Arsip</center></th>
                <th><center>Nomor Arsip</center></th>
                <th><center>Kategori</center></th>
                <th><center>Deskripsi</center></th>
                <th><center>Lihat</center></th>
                <th><center>Action</center></th>
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
                <td><a href="{{url('/storage/arsip/', $arsp->file_arsip)}}" target="_blank"><center>lihat</center></a></td>
                <td><div class="row">
                    <button class="btn nav-link col-sm-4"><a href="{{ route('arsip.edit', $arsp->id)}}"><i class="fas fa-edit"></i></a></button>
                    <form action="{{ route('arsip.destroy', $arsp->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn nav-link col-sm-4"><i class="fas fa-trash-alt"  style="color:rgb(223, 64, 64)"></i></button>
                    </form>
                    </div>
                </td>
            </tr>
        @endforeach
        @include('sweetalert::alert')
        </tbody>
    </table>
</div>
@endsection
