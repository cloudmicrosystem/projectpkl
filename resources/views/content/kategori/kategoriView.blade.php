 @extends('layouts.base')
@section('konten')
<div class="card-body table-responsive">
    <table table class="table table-bordered">
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
                    <a href="{{ URL::to('kategori/'.$ktg->id.'/edit') }}" class="nav-link"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('kategori.destroy', $ktg->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn nav-link"><i class="fas fa-trash-alt"></i></button>
                </td>
                </tr>
        @endforeach
        </body>
    </table>
@endsection