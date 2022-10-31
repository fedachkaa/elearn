<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index(){
        $greet = "Вітаємо в адмін-панелі!";
        return view('layouts.index', compact('greet'));
    }
}
