@extends('layouts.base')
@section('konten')
<h3><p class="font-weight-bold">Edit Arsip</p></h3><br>
    <form action="{{ route('arsip.update', [$arsip['0']->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Kategori</label>
            <div class="col-sm-10" name="idJabatan">
                <select name="kategoriId" class="custom-select mr-sm-2">
                    @foreach ($kategori as $kat)
                        @if ($kat->id == $arsip['0']->id_kategori)
                            <option value="{{ $kat->id }}" selected>{{ $kat->nama_kategori }}</option>
                        @else
                            <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="comFormLabellg" class="col-sm-2 col-form-label-lg font-weight-bold">No Arsip</label>
            <div class="col-sm-10">
                <input type="text" name="noArsip" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="Nomor Arsip" value="{{ $arsip['0']->no_arsip }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="comFormLabellg" class="col-sm-2 col-form-label-lg font-weight-bold">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="namaArsip" class="form-control form-control-lg" id="colFromLabel1Lg" placeholder="Nama" value="{{ $arsip['0']->nama_arsip }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg font-weight-bold">Deskripsi</label>
            <div class="col-sm-10">
                <textarea name="deskripsi" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Deskripsi">{{ $arsip['0']->deskripsi }}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="comFormLabellg" class="col-sm-2 col-form-label-lg font-weight-bold">File Arsip</label>
            <div class="col-sm-10">
                <div class="input-group mb-3">
                    <input type="file" name="fileArsip" class="form-control form-control-lg" id="inputGroupFile02"/>
                </div>
            </div>
        </div>
        {{-- <div class="pull-right">
            @foreach ($arsip as $ars)
            <a href="{{ route('arsip.edit', $ars->id) }}"><button type="submit" class="btn btn-primary">Submit</button></a>
        @endforeach
        </div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
