@extends('layouts.base')
@section('konten')
    <h3>
        <p class="font-weight-bold">Edit Disposisi</p>
    </h3><br>
    <form action="{{ route('disposisi.update', [$disposisi['0']->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Nama Arsip</label>
            <div class="col-sm-10" name="arsipId">
                <select name="arsipId" class="form-control form-control-lg">
                    @foreach ($arsip as $asp)
                        @if ($asp->id == $disposisi['0']->id)
                            <option value="{{ $asp->id }}" selected>{{ $asp->nama_arsip }}</option>
                        @else
                            <option value="{{ $asp->id }}">{{ $asp->nama_arsip }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">No Surat</label>
            <div class="col-sm-10">
                <input type="text" name="noSurat" class="form-control form-control-lg" id="colFormLabelLg"
                    placeholder="No Surat" value="{{ $disposisi['0']->no_surat }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Asal
                Surat</label>
            <div class="col-sm-10">
                <input type="text" name="asalSurat" class="form-control form-control-lg" id="colFormLabelLg"
                    placeholder="Asal Surat" value="{{ $disposisi['0']->asal_surat }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelLg"
                class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Diteruskan</label>
            <div class="col-sm-10" name="jabatanId">
                <select name="jabatanId" class="form-control form-control-lg">
                    @foreach ($jabatan as $jbt)
                        @if ($jbt->id == $jabatan['0']->nama_jabatan)
                            <option value="{{ $jbt->nama_jabatan }}" selected>{{ $jbt->nama_jabatan }}</option>
                        @else
                            <option value="{{ $jbt->id }}">{{ $jbt->nama_jabatan }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Status</label>
            <div class="col-sm-10">
                <select name="status" id="status" class="form-control form-control-lg">
                    @foreach ($disposisi as $dsp)
                        @if ($dsp->status == '0')
                            <option value="0" selected>Belum di proses</option>
                        @else
                            <option value="0">Belum di proses</option>
                        @endif
                        @if ($dsp->status == 'proses')
                            <option value="proses" selected>Sedang di proses</option>
                        @else
                            <option value="proses">Sedang di proses</option>
                        @endif
                        @if ($dsp->status == 'diterima')
                            <option value="diterima" selected>Diterima</option>
                        @else
                            <option value="diterima">Diterima</option>
                        @endif
                        @if ($dsp->status == 'ditolak')
                            <option value="ditolak" selected>Ditolak</option>
                        @else
                            <option value="ditolak">Ditolak</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Simpan</button>
    </form>
@endsection
