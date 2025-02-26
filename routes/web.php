<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProjectsController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get("/", [ProjectsController::class, "index"]);

Route::get("/project/{project}", [ProjectsController::class, "show"])->name("projects.show");

