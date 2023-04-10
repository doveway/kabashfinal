<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SimpleCalculation extends Component
{
    public $num1;
    public $num2;
    public $sum=0;

    public function calculate(){
        $this->sum = $this->num1 + $this->num2;
    }
    public function render()
    {
        return view('livewire.simple-calculation');
    }
}
