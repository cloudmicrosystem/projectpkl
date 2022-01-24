@extends('layouts.base')
@section('title', 'Kategori')
@section('konten')
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
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="viewTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            {{-- <th>Kode Kategori</th> --}}
                            <th>Tanggal Buat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_kategori }}</td>
                                {{-- <td></td> --}}
                                <td>{{ $data->created_at }}</td>
                                <td>
                                    {{-- <a href="" class="btn btn-info btn-sm float-left"><i class="fa fa-eye"></i></a> --}}
                                    <a href="{{ route('kategori.edit', $data->id) }}"
                                        class="btn btn-warning btn-sm float-left mr-2"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('kategori.destroy', $data->id) }}" method="POST"
                                        class="float-left">
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
