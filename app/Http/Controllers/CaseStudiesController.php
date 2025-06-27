<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseStudiesController extends Controller
{
    public function index()
    {
        $caseStudies = \App\Models\CaseStudy::all();
        return view('pages.case-study.index', compact('caseStudies'));
    }

    public function show($slug)
    {
        $caseStudy = \App\Models\CaseStudy::where('slug', $slug)->firstOrFail();
        return view('pages.case-study.show', compact('caseStudy'));
    }
}
