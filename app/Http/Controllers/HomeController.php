<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slide::all();
        $clients = \App\Models\Client::all();
        return view('index', compact('slides', 'clients'));
    }
}
