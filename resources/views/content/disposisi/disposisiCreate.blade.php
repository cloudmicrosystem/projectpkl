@extends('layouts.base')
@section('title', 'Pengajuan Surat')
@section('konten')
@include('layouts.errorField')
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('disposisi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="font-weight-bold" for="deskripsi">Yang Mengajukan</label>
                    <input type="text" name="pengaju" class="form-control form-control-solid"
                        value="{{ Auth::user()->nama }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="font-weight-bold" for="ditujukan">Ditujukan Kepada</label>
                    <select class="form-control form-control-solid" id="ditujukan" name="ditujukan">
                        @foreach ($jabatan as $data)
                            @if (Auth::user()->id_jabatan != $data->id)
                            <option value="{{ $data->id }}">{{ $data->nama_jabatan }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="font-weight-bold" for="noSurat">Nomor Surat</label>
                    <input class="form-control form-control-solid" id="noSurat" type="text" placeholder="Nomor Surat"
                        name="noSurat" required />
                </div>
                <div class="mb-3">
                    <label class="font-weight-bold" for="kategori">Dokumen</label>
                    <select class="form-control form-control-solid" id="kategori" name="dokumenDisposisi">
                        @foreach ($arsip as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_arsip }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-0 float-right">
                    <a href="{{ route('disposisi.index') }}" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
