<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Attendance extends Component
{
    public $date;
    public function mount() {
        $this -> date = date("Y-m-d");
    }

    public function render()
    {
        return view('livewire.attendance');
    }

}
