 @extends('layouts.base')
@section('konten')
<div class="row">
    <table table class="table table-striped table-responsive">
    <div>
            <div class="pull-right">
                <a href="{{ URL::to('kategori/create') }}" class="btn btn-md btn-primary">Tambah Kategori</a>
            </div>
        </div>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Tanggal Buat</th>
                <th>Tanggal Update</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
        
        @foreach($kategori as $ktg)
            <tr>
                <td>{{ $ktg->id }}</td>
                <td>{{ $ktg->nama_kategori }}</td>
                <td>{{ $ktg->created_at }}</td>
                <td>{{ $ktg->updated_at }}</td>
                <td>
                <td>
                    <a href="{{ URL::to('kategori/'.$ktg->id.'/edit') }}" class="nav-link"><i class="fas fa-edit"></i></a>
                    <a href="{{ URL::to('kategori/'.$ktg->id) }}" class="nav-link"><i class="fas fa-trash"></i></a>
                </td>
                </td>
                </tr>
        @endforeach
        </body>
    </table>
@endsection