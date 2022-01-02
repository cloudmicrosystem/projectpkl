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
                <th align="center">No</th>
                <th align="center">Nama</th>
                <th align="center">Tanggal Buat</th>
                <th align="center">Tanggal Update</th>
                <th align="center">Action</th>
                
            </tr>
        </thead>
        <tbody>
        
        @foreach($kategori as $ktg)
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $ktg->nama_kategori }}</td>
                <td>{{ $ktg->created_at }}</td>
                <td>{{ $ktg->updated_at }}</td>
                <td>
                <form action="{{ route('kategori.edit', $ktg->id) }}" method="POST">
                        @method('PUT')
                        <button type="submit" class="btn nav-link"><i class="fas fa-edit"></i></button>
                    </form>
                    <form action="{{ route('kategori.destroy', $ktg->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn nav-link"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
                </tr>
        @endforeach
        </body>
    </table>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.data').DataTable();
        });
    </script>
@endsection