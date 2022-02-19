<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ApelController;
use App\Http\Controllers\SakitController;
use App\Http\Controllers\PdltController;
use App\Http\Controllers\PuasaController;
use App\Http\Controllers\DinasController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\MakananController;

use Illuminate\Support\Facades\Route;


// Homepage
Route::get('/', function () {
    return view('auth.login');
    // return redirect()->route('dashboard');
    // Route::get('/home', \App\Http\Controllers\HomeController::class)->name('home');
});

// Route::get('/',[HomeController::class, 'index'])->name('home');

//Dashboard
Route::prefix('/')
    // ->middleware(['auth:sanctum','admin'])
    ->middleware(['auth:sanctum'])
    ->group(function(){
        Route::get('/',[DashboardController::class,'index'])->name('dashboard');
        Route::resource('users', UserController::class);
       
        Route::resource('items', ItemController::class);

        Route::resource('apels', ApelController::class);
        Route::resource('sakits', SakitController::class);
        Route::resource('pdlts', PdltController::class);
        Route::resource('puasas', PuasaController::class);
        Route::resource('dinas', DinasController::class);
        Route::resource('inventaris', InventarisController::class);
        Route::resource('makanans', MakananController::class);

        Route::get('schedules/ubah', 'App\Http\Controllers\ScheduleController@ubah')->name('schedules.ubah');
        Route::resource('schedules', ScheduleController::class);
        

        // Route::post('item/import', 'ItemController@import')->name('item.import');  
        Route::post('item/import', [ItemController::class,'import'])->name('item.import');  
    });

  