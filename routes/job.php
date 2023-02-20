<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

/* 

Job Routes

*/


// jobs
Route::resource('jobs', JobController::class);
