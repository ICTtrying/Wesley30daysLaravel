<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
    $jobs = Job::all();
    return view('testpage', ['jobs' => $jobs]);
    }

    public function addjob(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'salary' => 'required|numeric',
        ]);

        Job::create ([
            'title' => $request->input('title'),
            'salary' => $request->input('salary'),
            'employer_id' => rand(1, 10) // Random employer_id for demonstration
        ]);
        return redirect('testpage')->with('success', 'Job added!');
    }
}
