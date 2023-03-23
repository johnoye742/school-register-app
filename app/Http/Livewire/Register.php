<?php

namespace App\Http\Livewire;

use App\Models\Attendance;
use App\Models\Student;
use Livewire\Component;

class Register extends Component
{
    public $students;
    public $attend = [];
    public $marked;

    public $message;
    public $checkboxState;

    public function render()
    {
        $this -> students = Student::all();
        return view('livewire.register');
    }

    public function mark() {
        $t = "";
        foreach($this -> attend as $a) {
            $t .= $a . "<br/>";
        }

        $this -> marked = $t;
        
    }

    public function submit() {
        foreach($this -> attend as $at) {
            $date = date("d M Y");
            $attendance = new Attendance(
                [
                    "student_id" => $at,
                    "date" => $date,
                    "status" => "present"
                ]
            );
            $attendance -> save();
        }
        $this -> message = "successful";
        $this -> checkboxState = true;
    }
}
