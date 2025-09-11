<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Web Developer',
                'salary' => '50.000',
            ],
            [
                'id' => 2,
                'title' => 'Back-end Developer',
                'salary' => '40.000',
            ],
            [
                'id' => 3,
                'title' => 'Front-end Developer',
                'salary' => '35.000',
            ],
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    
    $jobs = [
        [
                'id' => 1,
                'title' => 'Web Developer',
                'salary' => '50.000',
        ],
        [
                'id' => 2,
                'title' => 'Back-end Developer',
                'salary' => '40.000',
        ],
        [
                'id' => 3,
                'title' => 'Front-end Developer',
                'salary' => '35.000',
        ],
    ];

    $job = Arr::first($jobs, fn ($job) => $job['id'] == $id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});