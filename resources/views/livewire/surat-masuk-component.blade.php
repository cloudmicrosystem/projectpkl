<div class='row'>
    <table class="table table-responsive">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">id_kategori</th>
            <th scope="col">no_arsip</th>
            <th scope="col">nama_arsip</th>
            <th scope="col">deskripsi</th>
            <th scope="col">tanggal_upload</th>
            <th scope="col">tanggal_update</th>
            <th scope="col">file_arsip</th>
            <th scope="col">id_jabatan</th>
            <th scope="col">id_user</th>
            <th scope="col">created_at</th>
            <th scope="col">update_at</th>
</tr>
</thead>
<body>
@foreach($arsip as $arsips)
<tr>
    <td>{{$arsips->id}}</td>
    <td>{{$arsips->id_kategori}}</td>
    <td>{{$arsips->no_arsip}}</td>
    <td> {{$arsips->nama_arsip}}</td>
    <td> {{$arsips->deskripsi}}</td>
    <td>{{$arsips->tanggal_upload}}</td>
    <td>{{$arsips->tanggal_update}}</td>
    <td>{{$arsips->file_arsip}}</td>
    <td>{{$arsips->id_jabatan}}</td>
    <td>{{$arsips->id_user}}</td>
    <td>{{$arsips->created_at}}</td>
    <td>{{$arsips->updated_at}}</td>
</tr>
@endforeach
</body>
</table>
</div>