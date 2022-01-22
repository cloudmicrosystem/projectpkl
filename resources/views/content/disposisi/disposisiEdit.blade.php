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
                <div class="form-group row">
                    <label for="colFormLabelLg" class="font-weight-bold">Nama Arsip</label>
                    <select name="arsipId" class="form-control form-control-solid" name="arsipId">
                        @foreach ($arsip as $asp)
                            @if ($asp->id == $disposisi['0']->id)
                                <option value="{{ $asp->id }}" selected>{{ $asp->nama_arsip }}</option>
                            @else
                                <option value="{{ $asp->id }}">{{ $asp->nama_arsip }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="font-weight-bold">No Surat</label>
                    <input type="text" name="noSurat" class="form-control form-control-solid" id="colFormLabelLg"
                        placeholder="No Surat" value="{{ $disposisi['0']->no_surat }}">
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="font-weight-bold">Asal
                        Surat</label>
                    <input type="text" name="asalSurat" class="form-control form-control-solid" id="colFormLabelLg"
                        placeholder="Asal Surat" value="{{ $disposisi['0']->asal_surat }}">
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="font-weight-bold">Diteruskan</label>
                    <select name="jabatanId" class="form-control form-control-solid">
                        @foreach ($jabatan as $jbt)
                            @if ($jbt->id == $jabatan['0']->nama_jabatan)
                                <option value="{{ $jbt->nama_jabatan }}" selected>{{ $jbt->nama_jabatan }}</option>
                            @else
                                <option value="{{ $jbt->id }}">{{ $jbt->nama_jabatan }}</option>
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
