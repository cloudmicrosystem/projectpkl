@extends('layouts.base')
@section('konten')
<div class="card-body table-responsive">
    <table id="viewTable">
    <div>
            <div class="pull-right">
            <form action="{{ route('user.create') }}" method="POST">
                @method('PUT')
                @csrf
                <button type="submit" class="btn btn-md btn-primary">Tambah User</button>
            </form>
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
                <td>{{ $loop->iteration }}</td>
                <td>{{ $usr->nama }}</td>
                <td>{{ $usr->username }}</td>
                <td>{{ $usr->email }}</td>
                <td>{{ $usr->alamat }}</td>
                <td>{{ $usr->id_jabatan}}</td>
                <td>
                <form action="{{ route('user.edit', $usr->id) }}" method="POST">
                        @method('PUT')
                        @csrf
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
            $('.data').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        extends: 'print',
                        messageTop: 'Data sukses!!!'
                    }  
                ]
            } );
        });
    </script>
@endsection