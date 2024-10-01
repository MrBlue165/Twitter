<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index () {

        $users = [
        [
            'name' => "Ivan",
            'age' => 15
        ],
        [
            'name' => "Matej",
            'age' => 16
        ],
        [
            'name' => "Matúš",
            'age' => 17
        ],
        [
            'name' => "Rišian",
            'age' => 40
        ]
        ];

        return view('dashboard', ['users' => $users]);
    }
}
