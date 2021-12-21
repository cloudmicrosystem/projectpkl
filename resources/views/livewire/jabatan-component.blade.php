<div class='row'>
    <table class="table table-responsive">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">nama_jabatan</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>

</tr>
</thead>
<body>
@foreach($jabatan as $jabatans)
<tr>
    <td>{{$jabatans->id}}</td>
    <td>{{$jabatans->nama_jabatan}}</td>
    <td>{{$jabatans->created_at}}</td>
    <td>{{$jabatans->updated_at}}</td>
</tr>
@endforeach
</body>
</table>
</div>