@extends('layouts.base')
@section('konten')
<div class="card-body table-responsive">
    <table id="viewTable" class="table table-bordered" style="width:100%">
    <div>
            <div class="pull-right">
            <a href="{{ route('kategori.create') }}"><button class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</button></a>
            </div>
        </div>
        <thead>
            <tr>
                <th><center>No</center></th>
                <th><center>Nama</center></th>
                <th><center>Tanggal Buat</center></th>
                <th><center>Tanggal Update</center></th>
                <th><center>Action</center></th>

            </tr>
        </thead>
        <tbody>

        @foreach($kategori as $ktg)
            <tr>
                <td><center>{{ $loop->iteration}}</center></td>
                <td>{{ $ktg->nama_kategori }}</td>
                <td>{{ $ktg->created_at }}</td>
                <td>{{ $ktg->updated_at }}</td>
                <td><div class="row">
                    <button class="btn nav-link col-sm-4"><a href="{{ route('kategori.edit', $ktg->id)}}"><i class="fas fa-edit"></i></a></button>
                    <form action="{{ route('kategori.destroy', $ktg->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn nav-link col-sm-4"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    </div>
                </td>
                </tr>
        @endforeach
        @include('sweetalert::alert')
        </body>
    </table>
@endsection
