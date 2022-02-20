<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;

use App\Http\Controllers\PuasaController;


use Illuminate\Support\Facades\Route;


// Homepage
// Route::get('/', function () {
//     return view('home.index');
//     // return redirect()->route('dashboard');
//     // Route::get('/home', \App\Http\Controllers\HomeController::class)->name('home');
// });

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::resource('comments', CommentController::class);

//Dashboard
Route::prefix('/admin')
    // ->middleware(['auth:sanctum','admin'])
    ->middleware(['auth:sanctum'])
    ->group(function(){
        Route::get('/',[DashboardController::class,'index'])->name('dashboard');
        Route::resource('users', UserController::class);
       
        Route::resource('comments', CommentController::class);

        
        Route::resource('puasas', PuasaController::class);
    });

  