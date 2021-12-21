<div class="row" id="createForm" style="display: none">
    <form>
        <div class="form-group">
            <label for="inputNamaKategori">Nama Kategori</label>
            <input type="text" class="form-control" id="inputNamaKategori" placeholder="Nama Kategori" wire:model="nama_kategori">
        </div>
        <button type="submit" class="btn btn-primary" wire:click.prevent="store()">Submit</button>
    </form>

</div>
