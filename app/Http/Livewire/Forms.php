<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Register;

class Forms extends Component
{
    public $name;
    public $email;
    public $allData = [];

    protected $rules = [
        'name' =>'required|min:6|max:30',
        'email'=>'required|email',
    ];
    public function submit(){
        $validateData = $this->validate();
        Register::create($validateData);
        session()->flash('message', 'Input Fields are valid');
    }
    public function render()
    {
        $this->allData = Register::all();
        return view('livewire.forms');
    }
}
