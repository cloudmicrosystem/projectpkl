<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SuratMasukComponent extends Component
{
    public function render()
    {
        $view = "jfkdjkfjd";

        return view('livewire.surat-masuk-component')->layout('layouts.base')->with(compact('view'));
    }
}
