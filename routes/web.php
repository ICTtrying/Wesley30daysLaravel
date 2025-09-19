<?php
use App\Http\Controllers\JobController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;
use App\models\Job;
//shows homepage
Route::get('/', [homeController::class, 'index']);
//shows all jobs
Route::get('/jobs', [JobController::class, 'index']);
//shows create job form
Route::get('/jobs/create', [JobController::class, 'createjob']);
//saves new job to database
Route::post('/jobs', [JobController::class, 'addjob']);
//shows single job
Route::get('/jobs/{id}', [JobController::class, 'showjob']);
//edit single job
Route::get('/jobs/{id}/edit', [JobController::class, 'editjobpage']);
//updates job in database
Route::patch('/jobs/{id}/', [JobController::class, 'updatejob']);
//destroy job in database
Route::delete('/jobs/{id}/', [JobController::class, 'deletejob']);
//contact page 
Route::get('/contact', [contactController::class, 'index']);
//test page
?>