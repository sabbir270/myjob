<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [JobController::class, 'home']);
//create a new job
Route::get('/postjob', [JobController::class, 'postNewJobForm'])->middleware('auth');
//save the new created job to database
Route::post('/', [JobController::class, 'saveJob'])->middleware('auth');
//edit form for job
Route::get('/editJob/{job}',[JobController::class, 'editJob'])->middleware('auth');
//update the job
Route::put('/edit/{job}',[JobController::class, 'updateJob'])->middleware('auth');
//show single job
Route::get('/job/{job_list}', [JobController::class, 'showSingleJob']);
//delete a job
Route::delete('/delete/{job}',[JobController::class,'deleteJob'])->middleware('auth');
//register
Route::get('/registation',[UserController::class,'registerForm'])->middleware('guest');
Route::post('/registered',[UserController::class,'saveRegistration']);
Route::post('/logout',[UserController::class,'logout']);
Route::get('/login',[UserController::class,'showLoginPage'])->name('login')->middleware('guest');
Route::post('/logged',[UserController::class,'userLogin']);
Route::get('/manage',[JobController::class,'manageJobs']);



