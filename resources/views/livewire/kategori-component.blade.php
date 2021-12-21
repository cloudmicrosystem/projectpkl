@include('livewire.kategori-create')
<div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">Tambah Kategori</button>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $kat)
            <tr>
                <td>{{$kat->id}}</td>
                <td>{{$kat->nama_kategori}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
