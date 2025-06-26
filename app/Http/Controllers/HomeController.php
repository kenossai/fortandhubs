<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slide = Slide::first();
        $clients = \App\Models\Client::all();
        $teamMembers = \App\Models\TeamMember::all();
        $reviews = \App\Models\Review::all();
        $projects = \App\Models\Project::take(2)->get();
        return view('index', compact('slide', 'clients', 'teamMembers', 'reviews', 'projects'));
    }
}
