<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class JabatanComponent extends Component
{
    public function render()
    {
        $jabatan = DB::select('select * from jabatan');
        return view('livewire.jabatan-component')->layout('layouts.base')->with(compact('jabatan'));
    }
}
