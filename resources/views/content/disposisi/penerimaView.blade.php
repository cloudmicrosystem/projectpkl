@extends('layouts.base')
@section('title', 'Disposisi')
@section('konten')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="viewTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Surat</th>
                            <th>Dokumen</th>
                            <th>Yang Mengajukan</th>
                            <th>Ditujukan</th>
                            <th>Status</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($disposisi as $data)
                            @if ($data->diteruskan == Auth::user()->id_jabatan || Auth::user()->level == 'admin')
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->no_surat }}</td>
                                    <td>{{ $data->nama_surat }}</td>
                                    <td>{{ $data->pengaju }}</td>
                                    <td>{{ $data->ditujukan }}</td>
                                    <td>
                                        @if ($data->status == 0)
                                            Diproses
                                        @elseif ($data->status == 1)
                                            Diterima
                                        @elseif ($data->status == 2)
                                            Ditolak
                                        @endif
                                    </td>
                                    <td>{{ date('d-M-Y', strtotime($data->created_at)) }}</td>
                                    <td>
                                        <a href="{{ route('disposisi.show', $data->id) }}"
                                            class="btn btn-info btn-sm float-left"><i class="fa fa-eye"></i></a>
                                        @if ($data->status == 0 && Auth::user()->level != 'admin')
                                            <a href="{{ route('disposisiUpdateStatus', [$data->id, 2]) }}" class="btn btn-danger btn-sm mx-1 px-2"><i
                                                    class="fa fa-times"></i></a>
                                            <a href="{{ route('disposisiUpdateStatus', [$data->id, 1]) }}" class="btn btn-success btn-sm px-2"><i
                                                    class="fa fa-check"></i></a>
                                        @endif
                                        {{-- <a href="{{ route('disposisi.edit', $data->id) }}"
                                            class="btn btn-warning btn-sm float-left mx-2"><i
                                                class="fas fa-edit"></i></a>
                                        @if ($data->status == 0)
                                            <form action="{{ route('disposisi.destroy', $data->id) }}" method="POST"
                                                class="float-left">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        @endif --}}
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
