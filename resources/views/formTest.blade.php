@isset($kategori)
    <!-- Kategori -->
    <h3>Kategori</h3>
    <form action="{{ route('kategori.update', [$kategori["0"]->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="namaKategori" placeholder="Nama Kategori" value="{{ $kategori["0"]->nama_kategori }}">
        <button type="submit">Submit</button>
    </form>
@endisset

@isset($jabatan)
    <!-- Jabatan -->
    <h3>Jabatan</h3>
    <form action="{{ route('jabatan.update', $jabatan["0"]->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="namaJabatan" placeholder="Nama Jabatan" value="{{ $jabatan["0"]->nama_jabatan }}">
        <button type="submit">Submit</button>
    </form>
@endisset

@isset($user)
    <!-- User -->
    <h3>User</h3>
    <form action="{{ route('arsip.update', $user["0"]->id) }}" method="POST">
        @csrf
    </form>
@endisset

@isset($arsip)
    <!-- Arsip -->
    <h3>Arsip</h3>
    <form action="{{ route('arsip.update', $arsip["0"]->id) }}">
        @csrf

    </form>
@endisset

