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
        $about = \App\Models\About::first();
        $approaches = \App\Models\OurApproach::all();
        $caseStudies = \App\Models\CaseStudy::take(3)->get();
        return view('index', compact(
        'slide',
        'clients',
        'teamMembers',
        'reviews',
        'projects',
        'about',
        'approaches', 'caseStudies'));
    }
}
