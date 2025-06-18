<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComingSoon extends Controller
{
    public function index()
    {
        return view('coming-soon');
    }
}
