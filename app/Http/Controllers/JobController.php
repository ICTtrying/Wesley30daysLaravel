<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function showjobs($id)
    {
        $job = Job::find($id);
        if (!$job) {
            abort(404, 'Job not found');
        }
        return view('jobs.show', ['job' => $job]); // verwijst naar resources/views/job.blade.php
    }

    public function addjob(Request $request)
    {
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);

        return redirect('/jobs');
    }

    public function createjob()
    {
        return view('jobs.create'); // verwijst naar resources/views/createjob.blade.php
    }

    public function addjobtestpage(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'salary' => 'required|numeric',
        ]);

        Job::create([
            'title' => $request->input('title'),
            'salary' => $request->input('salary'),
            'employer_id' => rand(1, 10) // Random employer_id for demonstration
        ]);
        return redirect('testpage')->with('success', 'Job added!');
    }
}
