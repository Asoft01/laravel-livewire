<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 3;

    public function increment(){
        // dd('adf');
        $this->count++;
    }

    public function decrement(){
        // dd("hello");
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter', ['counter' => $this->count]);
    }
}
