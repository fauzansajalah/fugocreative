<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('portofolio'); // pastikan ada resources/views/home.blade.php
    }
}
