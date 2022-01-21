@extends('layouts.base')
@section('title', 'Disposisi')
@section('konten')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary float-left">Arsip</h6> --}}
            <a href="{{ route('disposisi.create') }}" class="btn btn-success btn-icon-split btn-sm float-right">
                <span class="icon">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">
                    Pengajuan Surat
                </span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="viewTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Nomor Surat</center></th>
                            <th><center>Dokumen</center></th>
                            <th><center>Yang Mengajukan</center></th>
                            <th><center>Ditujukan</center></th>
                            <th><center>Status</center></th>
                            <th><center>Tanggal Pengajuan</center></th>
                            <th><center>Opsi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($disposisi as $data)
                            <tr>
                                <td><center>{{ $loop->iteration }}</center></td>
                                <td>{{ $data->no_surat }}</td>
                                <td>{{ $data->nama_surat }}</td>
                                <td>{{ $data->asal_surat }}</td>
                                <td>{{ $data->diteruskan }}</td>
                                <td>
                                    @if ($data->status == 0)
                                        Diproses
                                    @elseif ($data->status == 1)
                                        Diterima
                                    @elseif ($data->status == 2)
                                        Ditolak
                                    @endif
                                </td>
                                <td><center>{{ date('d-M-Y', strtotime($data->created_at)) }}</center></td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm float-left"><i class="fa fa-eye"></i></a>
                                    {{-- <a href="{{ route('disposisi.edit', $data->id) }}" class="btn btn-warning btn-sm float-left mx-2"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('arsip.destroy', $data->id) }}" method="POST" class="float-left">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form> --}}
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
