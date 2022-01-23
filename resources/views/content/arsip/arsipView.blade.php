@extends('layouts.base')
@section('title', 'Arsip')
@section('konten')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary float-left">Arsip</h6> --}}
            <a href="{{ route('arsip.create') }}" class="btn btn-success btn-icon-split btn-sm float-right">
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
                            <th>Kategori</th>
                            <th>Nomor Arsip</th>
                            <th>Nama Arsip</th>
                            <th>Deskripsi</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($arsip as $data)
                            @if ($data->id_user == Auth::user()->id)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nama_kategori }}</td>
                                    <td>{{ $data->no_arsip }}</td>
                                    <td>{{ $data->nama_arsip }}</td>
                                    <td>{{ $data->deskripsi }}</td>
                                    <td>
                                        <a href="" class="btn btn-info btn-sm float-left"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('arsip.edit', $data->id) }}"
                                            class="btn btn-warning btn-sm float-left mx-2"><i
                                                class="fas fa-edit"></i></a>
                                        <form action="{{ route('arsip.destroy', $data->id) }}" method="POST"
                                            class="float-left">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                    @include('sweetalert::alert')
                </table>
            </div>
        </div>
    </div>
@endsection
