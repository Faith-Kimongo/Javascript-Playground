<?php

use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MyhustleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Company\Register as CompanyRegister;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


/* 
User Profile
-> Bio
-> Education Background
-> Work Experience
-> Skillset
-> Resume'
*/
Route::get('/user-profile',[ProfileController::class,'index'])->name('user-profile');
Route::get('/user-profile/education-background/edit',[ProfileController::class,'educationCreate'])->name('profile.education.create');
Route::post('//user-profile/education-background/edi',[ProfileController::class,'educationStore'])->name('education.store');

// Experience
Route::resource('experience',ExperienceController::class);
Route::resource('skills', SkillController::class);
Route::resource('job',JobController::class);
Route::resource('myhustle',MyhustleController::class);


// company routes
Route::resource('companies',CompanyController::class);
Route::get('company/register',CompanyRegister::class);