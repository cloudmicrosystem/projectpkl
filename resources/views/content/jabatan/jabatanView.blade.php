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
                            <th><center>No</center></th>
                            <th><center>Nama Jabatan</center></th>
                            <th><center>Kode Jabatan</center></th>
                            <th><center>Tanggal Dibuat</center></th>
                            <th><center>Opsi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jabatan as $data)
                            <tr>
                                <td><center>{{ $loop->iteration }}</center></td>
                                <td>{{ $data->nama_jabatan }}</td>
                                <td></td>
                                <td><center>{{ date('d-M-Y', strtotime($data->created_at)) }}</center></td>
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
