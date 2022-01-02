@extends('layouts.base')
@section('konten')
<div class="card-body table-responsive">
    <table table class="table table-bordered">
    <div>
            <div class="pull-right">
                <a href="{{ URL::to('user/create') }}" class="btn btn-md btn-primary">Tambah User</a>
            </div>
        </div>
        <thead>
            <tr>
                <th align="center">No</th>
                <th align="center">Nama</th>
                <th align="center">Username</th>
                <th align="center">Email</th>
                <th align="center">Alamat</th>
                <th align="center">ID Jabatan</th>
                <th align="center">Action</th>
                
            </tr>
        </thead>
        <tbody>
        
        @foreach($user as $usr)
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $usr->nama }}</td>
                <td>{{ $usr->username }}</td>
                <td>{{ $usr->email }}</td>
                <td>{{ $usr->alamat }}</td>
                <td>{{ $usr->id_jabatan}}</td>
                <td>
                <form action="{{ route('user.edit', $usr->id) }}" method="POST">
                        @method('PUT')
                        <button type="submit" class="btn nav-link"><i class="fas fa-edit"></i></button>
                    </form>
                    <form action="{{ route('user.destroy', $usr->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn nav-link"><i class="fas fa-trash-alt"></i></button>
                    </form>
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