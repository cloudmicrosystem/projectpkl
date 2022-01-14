@extends('layouts.base')
@section('konten')
<div class="card-body table-responsive">
    <table id="viewTable" class="table table-bordered" style="width:100%">
    <div>
            <div class="pull-right">
            <a href="{{ route('disposisi.create') }}"><button class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</button></a>
            </div>
    </div>



        <thead>
            <tr>
                <td><center>No</center></td>
                <td><center>Nama Arsip Surat</center></td>
                <td><center>Nomor Surat</center></td>
                <td><center>Asal Surat</center></td>
                <td><center>Diteruskan</center></td>
                <td><center>Status</center></td>
                <td><center>Action</center></td>
            </tr>
        </thead>
        <tbody>
            @foreach($disposisi as $dsp)
            <tr>
                <td><center>{{ $loop->iteration }}</center></td>
                <td>{{ $dsp->nama_surat }}</td>
                <td><center>{{ $dsp->no_surat }}</center></td>
                <td>{{ $dsp->asal_surat }}</td>
                <td>{{ $dsp->diteruskan }}</td>
                <td>
                    @if($dsp->status == '0')
                    Belum di proses
                    @elseif($dsp->status == 'proses')
                        Sedang di proses
                    @elseif($dsp->status == 'diterima')
                        Diterima
                    @else
                        Ditolak
                    @endif
            </td>
                <td><div class="row">
                    <button class="btn nav-link col-sm-4"><a href="{{ route('disposisi.edit', $dsp->id)}}"><i class="fas fa-edit"></i></a></button>
                    <form action="{{ route('disposisi.destroy', $dsp->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn nav-link col-sm-4"><i class="fas fa-trash-alt"></i></button>
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
