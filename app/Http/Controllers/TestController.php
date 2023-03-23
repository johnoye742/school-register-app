<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function show() {
        $users = User::all();
        return view('test', ['users' => $users]);
    }

    public function add() {
        dd("called");
        $user = new User();
        $user -> name = "John Oye";
        $user -> email = "ol@gm";
        $user -> password = "ekj2l342;sjer";
        $user -> save();
    }
}
