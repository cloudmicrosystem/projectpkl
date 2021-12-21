<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class UserComponent extends Component
{
    public function render()
    {
        $users = DB::select('select * from users');
        return view('livewire.user-component')->layout('layouts.base')->with(compact('users'));;
    }
}
