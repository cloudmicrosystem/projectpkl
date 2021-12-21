<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Kategori;

class KategoriComponent extends Component
{
    public $katid, $nama_kategori;
    // public $updateNamaKategori;
    public $updateMode = false;

    public function resetInputFields()
    {
        $this->nama_kategori = "";
    }

    public function render()
    {
        $kategori = DB::select("SELECT id, nama_kategori FROM kategori");
        return view('livewire.kategori-component')->layout('layouts.base')->with(compact('kategori'));
    }

    public function store()
    {
        $validateData = $this->validate([
            'nama_kategori' => 'required',
        ]);
        Kategori::create($validateData);
        // DB::insert('INSERT INTO kategori(nama_kategori) VALUES('.$this->nama_kategori.')');

        session()->flash('message', 'Kategori berhasil ditambahkan!');
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $kategori = Kategori::where('id', $id)->first();
        // print_r($kategori); die;
        // DB::update("UPDATE kategori SET nama_kategori = ".$this->updateNamaKategori." where id = ".$id);
        $this->katid = $id;
        $this->nama_kategori = $kategori->nama_kategori;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validateData = $this->validate([
            'nama_kategori' => 'required',
        ]);

        if ($this->katid) {
            $kategori = Kategori::find($this->katid);
            $kategori->update([
                'nama_kategori' => $this->nama_kategori,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Kategori berhasil di update!');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if ($id) {
            DB::delete("DELETE kategori WHERE id =".$id);
        }
