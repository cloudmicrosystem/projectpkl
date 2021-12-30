@isset($kategori)
    <!-- Kategori -->
    <h3>Kategori</h3>
    <form action="{{ route('kategori.update', [$kategori['0']->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="namaKategori" placeholder="Nama Kategori" value="{{ $kategori['0']->nama_kategori }}">
        <button type="submit">Submit</button>
    </form>
@endisset

@isset($jabatan)
    <!-- Jabatan -->
    <h3>Jabatan</h3>
    <form action="{{ route('jabatan.update', $jabatan['0']->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="namaJabatan" placeholder="Nama Jabatan" value="{{ $jabatan['0']->nama_jabatan }}">
        <button type="submit">Submit</button>
    </form>
@endisset

@isset($user)
    <!-- User -->
    <h3>User</h3>
    <form action="{{ route('arsip.update', $user['0']->id) }}" method="POST">
        @csrf
    </form>
@endisset

@isset($arsip)
    <!-- Arsip -->
    <h3>Arsip</h3>
    <form action="{{ route('arsip.store') }}" method="POST">
        @csrf
        {{-- @method('PUT') --}}
        <select name="kategoriId">
            @foreach ($arsip as $arsip)
                <option value="{{ $arsip->id }}">{{ $arsip->nama_kategori }}</option>
            @endforeach
        </select> <br>
        <input type="text" name="noArsip" placeholder="No Arsip"> <br>
        <input type="text" name="namaArsip" placeholder="Nama Arsip"> <br>
        <textarea name="deskripsi" cols="30" rows="10"></textarea> <br>

        <button type="submit">Submit</button>
    </form>
@endisset

