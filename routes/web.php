<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view("/", "projects.index");

Route::view("/project/{project}", "projects.show")->name("projects.show");

