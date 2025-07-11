<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $careers = \App\Models\Career::all();
        return view('pages.careers.index', compact('careers'));
    }

    public function show($slug)
    {
        $career = \App\Models\Career::where('slug', $slug)->firstOrFail();
        return view('pages.careers.show', compact('career'));
    }
}
