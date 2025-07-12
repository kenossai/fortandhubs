<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CareerApplication;
use Illuminate\Support\Facades\Mail;
use App\Mail\CareerApplicationReceived;

class CareerApplicationController extends Controller
{
    public function form($slug)
    {
        $career = Career::where('slug', $slug)->firstOrFail();
        return view('pages.careers.apply', compact('career'));
    }

    public function store(Request $request, $slug)
    {
       // Find the related career
        $career = Career::where('slug', $slug)->firstOrFail();

        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'why_apply' => 'required|string',
            'project_pride' => 'required|string',
            'portfolio' => 'required|string',
            'salary_expectation' => 'required|string',
            'cv' => 'required|mimes:pdf,doc,docx|max:3048',
        ]);

        // Sanitize applicant name to create filename (slugify it)
        $applicantNameSlug = Str::slug($validated['name']); // e.g. "john-doe"

        // Get file extension
        $extension = $request->file('cv')->getClientOriginalExtension();

        // Build file name: e.g. john-doe.pdf
        $filename = $applicantNameSlug . '.' . $extension;

        // Store file with custom name inside "cvs" directory on public disk
        $cvPath = $request->file('cv')->storeAs('cvs', $filename, 'public');

        // Create the application record
        $application = CareerApplication::create([
            'career_id' => $career->id,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'why_apply' => $validated['why_apply'],
            'project_pride' => $validated['project_pride'],
            'portfolio' => $validated['portfolio'],
            'salary_expectation' => $validated['salary_expectation'],
            'cv' => $cvPath,
        ]);

        // Send notification email
        Mail::to(config('mail.from.address'))->send(new CareerApplicationReceived($application));

        return back()->with('success', 'Application submitted successfully!');
    }
}
