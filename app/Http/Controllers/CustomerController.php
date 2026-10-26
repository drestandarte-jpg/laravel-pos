<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['name' => 'Ana Reyes', 'email' => 'ana@example.com'],
            ['name' => 'Ben Santos', 'email' => 'ben@example.com'],
            ['name' => 'Carla Cruz', 'email' => 'carla@example.com'],
            ['name' => 'David Garcia', 'email' => 'david@example.com'],
            ['name' => 'Ella Flores', 'email' => 'ella@example.com'],
        ];

        return view('customers', ['customers' => $customers]);
    }
}