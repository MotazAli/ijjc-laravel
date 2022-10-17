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



Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::get('/signup', [AuthController::class,'signup'])->name('signup');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');
Route::get('/login/forgot', [AuthController::class,'forgotPassword'])->name('forgot');
Route::get('/home', [HomeController::class,'index'])->name('index');
Route::get('/', [HomeController::class,'soonIndex'])->name('soon');
