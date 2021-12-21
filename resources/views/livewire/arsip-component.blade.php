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
@foreach($arsip as $arsp)
<tr>
    <td>{{$arsp->id}}</td>
    <td>{{$arsp->id_kategori}}</td>
    <td>{{$arsp->no_arsip}}</td>
    <td>{{$arsp->nama_arsip}}</td>
    <td>{{$arsp->deskripsi}}</td>
    <td>{{$arsp->tanggal_upload}}</td>
    <td>{{$arsp->tanggal_update}}</td>
    <td>{{$arsp->file_arsip}}</td>
    <td>{{$arsp->id_jabatan}}</td>
    <td>{{$arsp->id_user}}</td>
    <td>{{$arsp->created_at}}</td>
    <td>{{$arsp->updated_at}}</td>
</tr>
@endforeach
</body>
</table>
</div>