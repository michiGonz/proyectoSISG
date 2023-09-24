<?php
/* Configs and Route */
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;

/* Controllers  */

use App\Http\Controllers\IndicatorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AmbientController;
use App\Http\Controllers\SimulacionController;
use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\ActoseguroController;
use App\Http\Controllers\ActoinseguroController;
use App\Http\Controllers\OpsaController;
use App\Http\Controllers\IndicadorplanController;
use App\Http\Controllers\PlanificacionformacionController;
use App\Http\Controllers\PlandeformacionController;
use App\Http\Controllers\AuditoriasController;


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('/');
    Route::resource('indicators', IndicatorController::class);
    Route::resource('simulacion', SimulacionController::class);
    Route::resource('ambiente', AmbientController::class);
    Route::resource('opsa', OpsaController::class);
    Route::resource('actoseguro', ActoseguroController::class);
    Route::resource('actoinseguro', ActoinseguroController::class);
    Route::resource('indicadorplan', IndicadorplanController::class);
    Route::get('logout', [AutenticacionController::class,'logout'])->name('logout');
    Route::resource('planificacion', PlanificacionController::class);
    Route::resource('planificacionformacion', PlanificacionformacionController::class);
    Route::resource('plandeformacion', PlandeformacionController::class);
    Route::resource('auditorias', AuditoriasController::class);
});

Route::post('login', [AutenticacionController::class,'postLogin'])->name('loginData');
Route::get('login', [AutenticacionController::class,'getLogin'])->name('login');
