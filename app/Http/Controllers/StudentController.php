<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Student::all();
        return view("students");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("add-students");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $student = new Student([
            "name" => $request -> input("name", "John Doe"),
            "email" => $request -> input("email"),
            "phone" => $request -> input("phone"),
            "class" => $request -> input("class"),
            "admission_no" => $request -> input("no"),
            "gender" => $request -> input("gender")
        ]);

        $student -> save();

        return back()->with('success', 'Student data saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
