<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Welcome to Laravel',
            'message' => 'This is a dynamic message.',
            'user' => auth()->user(),
            'items' => ['Item 1', 'Item 2', 'Item 3']
        ];
        return view('home', $data);
    }
}
