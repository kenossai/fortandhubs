<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = \App\Models\Service::all();
        return view('coming-soon', compact('services'));
    }

    public function show($id)
    {
        $service = \App\Models\Service::findOrFail($id);
        return view('pages.service-details', compact('service'));
    }


}
