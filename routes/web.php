<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Register;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}) -> middleware("auth");

Route::get("/test", [TestController::class, "show"]);

Route::get('/login', function () {
    return view("login");
}) -> name("login");

Route::resource("/attendance", AttendanceController::class);

Route::resource("/students", StudentController::class);

Route::get("/mark-the-register", [Register::class, "index"]);

Route::get("/mark-the-register/{date}", [Register::class, "byDate"]);