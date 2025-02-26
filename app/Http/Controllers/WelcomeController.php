<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class WelcomeController extends Controller
{
    public function __invoke(Request $request) {

        $user = User::query()->create([
            "name" => "Leonardo",
            "email" => "leodev@gmai.com",
            "password" => "123",

        ]);

        // dd($user);

        return view("Welcome");
    }
}

