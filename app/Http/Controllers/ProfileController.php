<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(){
        $data = [
            "name" => "Jan Boekema",
            "email" => "janboekema@gmail.com",
            "description" => "wow whats this",
            "age" => 18,
            "interests" => array(
                "voetballen",
                "gamen",
                "programmeren",
                "wow"
            )
        ];
        return view('profile', $data);
    }

    public function index(){
        $profiles = array(
            "Profiel1",
            "Henk",
            "Jan",
            "Kees",
            "Nice",
            "Test",
            "TEST1",
            "TEST2",
            "TEST3",
            "TEST4"
        );
        return view('profiles', ['profiles' => $profiles]);
    }
}
