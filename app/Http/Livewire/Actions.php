<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Actions extends Component
{
    public $sum;
    public $num=0;
    public function add($a, $b){
        $this->sum = $a + $b;
    }

    public function increment(){
        $this->num++;
    }

    public function decrement(){
        $this->num--;
    }

    public function render()
    {
        return view('livewire.actions');
    }
}
