<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ArsipComponent extends Component
{
    public function render()
    {
        $arsip = DB::select('select * from arsip');
        return view('livewire.arsip-component')->with(compact('arsip'));
    }
}