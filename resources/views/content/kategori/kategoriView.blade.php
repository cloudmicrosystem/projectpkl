@extends('layouts.base')
@section('konten')
@section('title', 'Kategori')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('kategori.create') }}" class="btn btn-success btn-icon-split btn-sm float-right">
            <span class="icon">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">
                Tambah
            </span>
        </a>
    
    <div class="card-body table-responsive">
        <table class="table table-bordered" id="viewTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>
                        <center>No</center>
                    </th>
                    <th>
                        <center>Nama</center>
                    </th>
                    <th>
                        <center>Tanggal Buat</center>
                    </th>
                    <th>
                        <center>Tanggal Update</center>
                    </th>
                    <th>
                        <center>Action</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $ktg)
                    <tr>
                        <td>
                            <center>{{ $loop->iteration }}</center>
                        </td>
                        <td>{{ $ktg->nama_kategori }}</td>
                        <td>{{ $ktg->created_at }}</td>
                        <td>{{ $ktg->updated_at }}</td>
                        <td>
                                {{-- <a href="" class="btn btn-info btn-sm float-left"><i class="fa fa-eye"></i></a> --}}
                                    <a href="{{ route('kategori.edit', $ktg->id) }}" class="btn btn-warning btn-sm float-left mx-2"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('kategori.destroy', $ktg->id) }}" method="POST" class="float-left">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    @include('sweetalert::alert')
                </table>
            </div>
        </div>
    </div>
@endsection