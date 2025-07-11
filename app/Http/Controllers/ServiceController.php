<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = \App\Models\Service::all();
        $clients = \App\Models\Client::all();
        return view('pages.services', compact('services', 'clients'));
    }

    public function show($slug)
    {
        $service = \App\Models\Service::where('slug', $slug)->firstOrFail();
        return view('pages.service-details', compact('service'));
    }


}
