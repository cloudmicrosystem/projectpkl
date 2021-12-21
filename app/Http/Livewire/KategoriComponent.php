<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class KategoriComponent extends Component
{
    public function render()
    {
        $kategori = DB::select('select * from kategori');
        return view('livewire.kategori-component')->layout('layouts.base')->with(compact('kategori'));;
    }
}
