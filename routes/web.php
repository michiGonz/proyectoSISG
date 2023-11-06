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
use App\Http\Controllers\ActoinseguroController;
use App\Http\Controllers\IndicadorplanController;
use App\Http\Controllers\PlanificacionformacionController;
use App\Http\Controllers\PlandeformacionController;
use App\Http\Controllers\AuditoriasController;
use App\Http\Controllers\InvestigacionController;
use App\Http\Controllers\ComiteController;
use App\Http\Controllers\JornadaController;
use App\Http\Controllers\CulturaController;
use App\Http\Controllers\AprendiendoController;
use App\Http\Controllers\ManejoController;
use App\Http\Controllers\OperativaController;
use App\Http\Controllers\ParametrosController;
use App\Http\Controllers\MonitoreosController;
use App\Http\Controllers\Ambiente_planController;
use App\Http\Controllers\UnidadfuncionalController;
use App\Http\Controllers\UsuariosprofitController;
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\CrearindicadorController;
use App\Http\Controllers\OpsaController;
use App\Models\Crearindicador;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('/');
    Route::resource('indicators', IndicatorController::class);
    Route::resource('simulacion', SimulacionController::class);
    Route::resource('ambiente', AmbientController::class);
    Route::resource('actoinseguro', ActoinseguroController::class);
    Route::resource('indicadorplan', IndicadorplanController::class);
    Route::get('logout', [AutenticacionController::class,'logout'])->name('logout');
    Route::resource('planificacion', PlanificacionController::class);
    Route::resource('planificacionformacion', PlanificacionformacionController::class);
    Route::resource('plandeformacion', PlandeformacionController::class);
    Route::resource('auditorias', AuditoriasController::class);
    Route::resource('investigacion', InvestigacionController::class);
    Route::resource('comite', ComiteController::class);
    Route::resource('jornada', JornadaController::class);
    Route::resource('cultura', CulturaController::class);
    Route::resource('aprendiendo', AprendiendoController::class);
    Route::resource('manejo', ManejoController::class);
    Route::resource('operativa', OperativaController::class);
    Route::resource('parametros', ParametrosController::class);
    Route::resource('monitoreos', MonitoreosController::class);
    Route::resource('ambiente_plan', Ambiente_planController::class);
    Route::resource('unidadfuncional', UnidadfuncionalController::class);
    Route::resource('usuariosprofit', UsuariosprofitController::class);
    Route::resource('configuracion', ConfiguracionController::class);
    Route::resource('opsa', OpsaController::class);
    Route::resource('crearindicador', CrearindicadorController::class);
});

Route::post('login', [AutenticacionController::class,'postLogin'])->name('loginData');
Route::get('login', [AutenticacionController::class,'getLogin'])->name('login');

