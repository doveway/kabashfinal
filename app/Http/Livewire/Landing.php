<?php

namespace App\Http\Livewire;

use App\Models\PrayerRequests;
use Livewire\Component;

class Landing extends Component
{
    public $prayer_requests = [];

    public function submit(){
        $count = 1;
    }

    public function render()
    {
        $this->prayer_requests = PrayerRequests::all();
        return view('livewire.landing');
    }
}
