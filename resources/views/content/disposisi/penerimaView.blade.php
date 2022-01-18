@extends('layouts.base')
@section('konten')
<div class="card-body table-responsive">
    <table id="viewTable" class="table table-bordered" style="width:100%">

        <thead>
            <tr>
                <td><center>No</center></td>
                <td><center>Nama Surat</center></td>
                <td><center>Nomor Surat</center></td>
                <td><center>Asal Surat</center></td>
                <td><center>Tanggal Diajukan</center></td>
                <td><center>Status</center></td>
                {{-- <td><center>Lihat</center></td> --}}
                <td><center>Action</center></td>
            </tr>
        </thead>
        <tbody>
            <!-- Table data disposisi -->
            <tr>
                <td><center>1</center></td>
                <td>Contoh surat</td>
                <td><center>123</center></td>
                <td>Pak bani</td>
                <td>07-06-2001</td>
                <td><label class="label label-success">Diterima</label></td>
                {{-- <td><a href="{{url('/storage/arsip/', $arsp->file_arsip)}}" target="_blank"><center>lihat</center></a></td> --}}
                <td>
                    <div class="row">
                    <button class="btn nav-link col-sm-4"><a href="#"><i class="fas fa-edit"></i></a></button>
                    {{-- <form action="{{ route('disposisi.destroy', $dsp->id) }}" method="POST">
                        @method('DELETE')
                        @csrf --}}
                        <button type="submit" class="btn nav-link col-sm-4"><i class="fas fa-trash-alt"></i></button>
                    {{-- </form> --}}
                    </div>
                </td>
            </tr>
        {{-- @endforeach --}}
        @include('sweetalert::alert')
        </tbody>
    </table>
</div>
@endsection
