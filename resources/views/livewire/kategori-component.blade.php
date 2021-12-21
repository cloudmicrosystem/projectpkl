@if ($updateMode)
    @include('livewire.kategori-update')
@else
    @include('livewire.kategori-create')
@endif
<div >
    <button type="button" class="btn btn-primary" onclick="createKategoriFunction()">Tambah Kategori</button>
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
                <td>
                    <button wire:click="edit{{ $kat->id }}">Edit</button>
                    <button wire:click="delete{{ $kat->id }}">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
