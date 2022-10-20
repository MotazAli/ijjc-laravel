<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Menu\Affiliates;
use App\Http\Livewire\Menu\Athletes;
use App\Http\Livewire\Menu\Instructors;
use App\Http\Livewire\Menu\Schedule;
use Illuminate\Support\Facades\Route;

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

Route::prefix('academies')->group(function(){
    Route::get('/instructors', Instructors::class)->name('instructors');
    Route::get('/athelets', Athletes::class)->name('athelets');
    Route::get('/affiliates', Affiliates::class)->name('affiliates');
    Route::get('/schedule', Schedule::class)->name('schedule');
    
});



Route::get('/login', [AuthController::class,'index'])->name('auth.index');
Route::post('/login', [AuthController::class,'login'])->name('auth.login');
Route::get('/signup', [AuthController::class,'signup'])->name('auth.signup');
Route::post('/signup', [AuthController::class,'store'])->name('auth.store');
Route::post('/logout', [AuthController::class,'logout'])->name('auth.logout');
Route::get('/login/forgot', [AuthController::class,'forgotPassword'])->name('auth.forgot');

Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/home', [HomeController::class,'index'])->name('home.index');
Route::get('/', [HomeController::class,'soonIndex'])->name('soon');
