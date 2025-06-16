<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $clients = \App\Models\Client::take(6)->get();
        return view('pages.projects', compact('clients'));
    }

    public function show($slug)
    {
        $project = \App\Models\Project::where('slug', $slug)->firstOrFail();
        return view('pages.project-details', compact('project'));
    }
}
