@extends('layouts.base')
@section('title', 'Jabatan')
@section('konten')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary float-left">Arsip</h6> --}}
            <a href="{{ route('jabatan.create') }}" class="btn btn-success btn-icon-split btn-sm float-right">
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
                            <th>Nama Jabatan</th>
                            <th>Kode Jabatan</th>
                            <th>Tanggal Dibuat</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jabatan as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_jabatan }}</td>
                                <td></td>
                                <td>{{ date('d-M-Y', strtotime($data->created_at)) }}</td>
                                <td>
                                    {{-- <a href="" class="btn btn-info btn-sm float-left"><i class="fa fa-eye"></i></a> --}}
                                    <a href="{{ route('jabatan.edit', $data->id) }}"
                                        class="btn btn-warning btn-sm float-left mx-2"><i
                                            class="fas fa-edit"></i></a>
                                    <form action="{{ route('jabatan.destroy', $data->id) }}" method="POST"
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
