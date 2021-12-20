<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class SuratMasukComponent extends Component
{

    public function render()
    {
        $arsip = DB::select('select * from arsip');
        return view('livewire.surat-masuk-component')->layout('layouts.base')->with(compact('arsip'));
    }
}