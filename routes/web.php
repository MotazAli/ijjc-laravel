<?php

use App\Http\Controllers\AcademiesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\UsersController;
use App\Http\Livewire\Dashboard\Index;
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


Route::get('lang/{lang}', [LanguagesController::class,'switchLang'])->name('lang.switch');// ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::prefix('academies')->group(function(){
    Route::get('/instructors', Instructors::class)->name('instructors');
    Route::get('/athelets', Athletes::class)->name('athelets');
    Route::get('/affiliates', Affiliates::class)->name('affiliates');
    Route::get('/schedule', Schedule::class)->name('schedule');

});

Route::middleware(['auth'])->prefix('dashboard')->group(function(){
    Route::get('/', [DashboardsController::class,'index'])->name('dashboard.index');

    Route::prefix('/users')->group(function(){
        Route::get('/', [UsersController::class,'index'])->name('dashboard.users.index');
        Route::get('/{user}', [UsersController::class,'edit'])->name('dashboard.users.edit');
    });

    Route::prefix('/academies')->group(function(){
        Route::get('/', [AcademiesController::class,'index'])->name('dashboard.academies.index');
        Route::get('/new', [AcademiesController::class,'create'])->name('dashboard.academies.create');
        Route::get('/$academy', Schedule::class)->name('dashboard.academy');
        Route::post('/', [AcademiesController::class,'store'])->name('dashboard.academies.store');
    });

    Route::prefix('/schedules')->group(function(){
        Route::get('/', Index::class)->name('dashboard.schedules');
        Route::get('/$schedule', Schedule::class)->name('dashboard.schedule');
    });

    Route::get('/affiliates', Affiliates::class)->name('affiliates');
});




Route::prefix('/')->group(function(){
    Route::get('login', [AuthController::class,'index'])->name('auth.index');
    Route::post('login', [AuthController::class,'login'])->name('auth.login');
    Route::get('signup', [AuthController::class,'signup'])->name('auth.signup');
    Route::post('signup', [AuthController::class,'store'])->name('auth.store');
    Route::post('logout', [AuthController::class,'logout'])->name('auth.logout');
    Route::get('login/forgot', [AuthController::class,'forgotPassword'])->name('auth.forgot');
    Route::get('contact', [ContactController::class,'index'])->name('contact');
    Route::any('404', function() { return view('errors.404'); })->name('errors.404');
    Route::get('', [HomeController::class,'index'])->name('home.index');
    // Route::get('/', [HomeController::class,'soonIndex'])->name('soon');
});







