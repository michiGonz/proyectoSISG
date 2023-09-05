<?php
/* Configs and Route */
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;

/* Controllers  */
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\IndicatorController;
use App\Http\Controllers\AmbienteController;
use App\Http\Controllers\ObsController;
use App\Http\Controllers\AutenticacionController;

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/', ActivityController::class);
    Route::resource('indicators', IndicatorController::class);
    Route::resource('ambiente', AmbienteController::class);
    Route::resource('observacion', ObsController::Class);
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('logout', [AutenticacionController::class,'logout'])->name('logout');
});

Route::post('login', [AutenticacionController::class,'postLogin'])->name('loginData');
Route::get('login', [AutenticacionController::class,'getLogin'])->name('login');
