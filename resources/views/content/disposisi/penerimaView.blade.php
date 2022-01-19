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
                <td>surat penting</td>
                <td><center>010</center></td>
                <td>PT AN</td>
                <td>10-10-2022</td>
                <td>diterima    </td>
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
