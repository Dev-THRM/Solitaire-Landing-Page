<?php

namespace App\Http\Controllers;

use App\Mail\JobApplicationAdminNotification;
use App\Mail\JobApplicationCandidateConfirmation;
use App\Models\JobApplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobApplicationController extends Controller
{
    public function store(Request $request, int $jobId): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'location' => 'required|string|max:255',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:10240',
        ]);

        $resumePath = $request->file('resume')->store('resumes', 'public');

        $application = JobApplication::create([
            'job_listing_id' => $jobId,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'location' => $validated['location'],
            'resume_path' => $resumePath,
        ]);

        // Send email to Admin
        $adminEmail = env('MAIL_FROM_ADDRESS', 'info@solitaireconsultancyservices.com');
        Mail::to($adminEmail)->send(new JobApplicationAdminNotification($application));

        // Send email to Candidate
        Mail::to($application->email)->send(new JobApplicationCandidateConfirmation($application));

        return back()->with('success', 'Your application has been submitted successfully.');
    }
}
