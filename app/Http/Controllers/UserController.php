<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['name' => 'Admin One', 'role' => 'Administrator'],
            ['name' => 'Cashier One', 'role' => 'Cashier'],
            ['name' => 'Cashier Two', 'role' => 'Cashier'],
            ['name' => 'Manager One', 'role' => 'Manager'],
            ['name' => 'Staff One', 'role' => 'Staff'],
        ];

        return view('users', ['users' => $users]);
    }
}