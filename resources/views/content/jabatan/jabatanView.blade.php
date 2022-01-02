@extends('layouts.base')
@section('konten')
<div class="card-body table-responsive">
    <table table class="table table-bordered">
    <div>
            <div class="pull-right">
                <a href="{{ URL::to('jabatan/create') }}" class="btn btn-md btn-primary">Tambah Jabatan</a>
            </div>
        </div>
        <thead>
            <tr>
                <th align="center">No</th>
                <th align="center">Nama</th>
                <th align="center">Tanggal Buat</th>
                <th align="center">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($jabatan as $jbt)
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $jbt->nama_jabatan }}</td>
                <td>{{ $jbt->created_at }}</td>
                <td>
                <form action="{{ route('jabatan.edit', $jbt->id) }}" method="POST">
                        @method('PUT')
                        <button type="submit" class="btn nav-link"><i class="fas fa-edit"></i></button>
                    </form>
                    <form action="{{ route('jabatan.destroy', $jbt->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn nav-link"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.data').DataTable();
        });
    </script>
@endsection