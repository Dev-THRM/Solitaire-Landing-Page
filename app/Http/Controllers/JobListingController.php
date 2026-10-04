<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;

class JobListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = JobListing::latest()->get();

        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'location' => 'required|max:255',
            'type' => 'required',
            'description' => 'required',
        ]);

        JobListing::create($request->all());

        return redirect()->route('admin.jobs.index')->with('success', 'Job posted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JobListing $jobListing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobListing $job)
    {
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobListing $job)
    {
        $request->validate([
            'title' => 'required|max:255',
            'location' => 'required|max:255',
            'type' => 'required',
            'description' => 'required',
        ]);

        $job->update($request->all());

        return redirect()->route('admin.jobs.index')->with('success', 'Job updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobListing $job)
    {
        $job->delete();
        return redirect()->route('admin.jobs.index')->with('success', 'Job deleted successfully.');
    }
}
