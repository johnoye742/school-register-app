<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class StudentsTable extends Component
{
    public $students;

    public function render()
    {
        $this -> students = Student::all();
        return view('livewire.students-table');
    }
}
