@extends('layouts.base')
@section('konten')
<div class="card-body table-responsive">
    @if (session('error'))
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
    </div>
@endif
    <table id="viewTable" class="table table-bordered" style="width:100%">
    <div>
            <div class="pull-right">
            <a href="{{ route('kategori.create') }}"><button class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</button></a>
            </div>
        </div>
        <thead>
            <tr>
                <th align="center">No</th>
                <th align="center">Nama</th>
                <th align="center">Tanggal Buat</th>
                <th align="center">Tanggal Update</th>
                <th align="center">Action</th>
                
            </tr>
        </thead>
        <tbody>
        
        @foreach($kategori as $ktg)
            <tr>
                <td>{{ $loop->iteration}}</td>
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
        </body>
    </table>
@endsection