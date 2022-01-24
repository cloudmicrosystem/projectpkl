@extends('layouts.base')
@section('title', 'Disposisi')
@section('konten')
    @include('layouts.errorField')
    <div class="card shadow mb-3">
        <div class="card-body">
            <form action="{{ route('disposisi.update', [$disposisi['0']->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="font-weight-bold" for="deskripsi">Yang Mengajukan</label>
                    <input type="text" name="pengaju" class="form-control form-control-solid"
                        value="{{ Auth::user()->nama }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="font-weight-bold" for="ditujukan">Ditujukan Kepada</label>
                    <select class="form-control form-control-solid" id="ditujukan" name="ditujukan">
                        @foreach ($jabatan as $data)
                            @if ($disposisi['0']->diteruskan == $data->id)
                                <option value="{{ $data->id }}" selected>{{ $data->nama_jabatan }}</option>
                            @endif
                            <option value="{{ $data->id }}">{{ $data->nama_jabatan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="colFormLabelLg" class="font-weight-bold">No Surat</label>
                    <input type="text" name="noSurat" class="form-control form-control-solid" id="colFormLabelLg"
                        placeholder="No Surat" value="{{ $disposisi['0']->no_surat }}">
                </div>
                <div class="form-group">
                    <label for="colFormLabelLg" class="font-weight-bold">Nama Arsip</label>
                    <select name="arsipId" class="form-control form-control-solid" name="arsipId">
                        @foreach ($arsip as $data)
                            @if ($data->id == $disposisi['0']->id)
                                <option value="{{ $data->id }}" selected>{{ $data->nama_arsip }}</option>
                            @else
                                <option value="{{ $data->id }}">{{ $data->nama_arsip }}</option>
                            @endif
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
