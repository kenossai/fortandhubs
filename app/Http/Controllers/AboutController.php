<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = \App\Models\About::first();
        $teamMembers = \App\Models\TeamMember::all();
        $clients = \App\Models\Client::take(6)->get();
        return view('pages.about', compact('about', 'teamMembers', 'clients'));
    }

    public function team()
    {
        $about = \App\Models\About::first();
        $teamMembers = \App\Models\TeamMember::all();
        return view('pages.teams.index', compact('teamMembers', 'about'));
    }
}
