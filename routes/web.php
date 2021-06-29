<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProyectsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DatosEmpresaController;
use App\Http\Controllers\ServicesController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

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

Route::get('/dashboard', function () {
    return view('auth.login');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dash.index');
})->name('dashboard');

Route::get('/', HomeController::class)->name('index');

Route::resource('datosempresa', 'App\Http\Controllers\DatosEmpresaController');

Route::get('/nosotros', [AboutController::class, 'about'])->name('nosotros');

Route::get('/servicios', [ServicesController::class, 'services'])->name('servicios');

Route::get('/proyectos', [ProyectsController::class, 'proyects'])->name('proyectos');

Route::get('/contactanos', [ContactController::class, 'contact'])->name('contactanos');

Route::post('/contactanos', [ContactController::class, 'store'])->name('contactanos.store');
