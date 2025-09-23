<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function showjob(Job $job)
    {
        return view('jobs.show', ['job' => $job]); // verwijst naar resources/views/job.blade.php
    }

    public function addjob(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:100'],
            'salary' => 'required',
        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);

        return redirect('/jobs');
    }

    public function createjob()
    {
        return view('jobs.create');
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
            'employer_id' => '1',
        ]);

        return redirect('testpage')->with('success', 'Job added!');
    }

    public function editjobpage(Job $job)
    {

        return view('jobs.edit', ['job' => $job]);
    }

    public function updatejob(Request $request, Job $job)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:100'],
            'salary' => 'required',
        ]);

        $job->update([
            'title' => $request->input('title'),
            'salary' => $request->input('salary'),
        ]);

        return redirect("/jobs/{$job->id}");
    }

    public function deletejob(Job $job)
    {
        $job->delete();

        return redirect('/jobs');
    }
}
