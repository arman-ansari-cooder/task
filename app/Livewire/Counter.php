<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Counter extends Component
{

    

    public function render()
    {
        return view('livewire.counter');
    }

}
