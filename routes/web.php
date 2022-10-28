<?php

use App\Http\Controllers\GuitarraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Guitarra;

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




Route::get('/',[HomeController::class,'MostrarHome'])->name('home');

Route::get('/editar-guitarra', [GuitarraController::class, 'EditarGuitarra'])->name('editar-guitarra');
Route::get('/cadastrar-guitarra', [GuitarraController::class, 'CadastroGuitarra'])->name('cadastrar-guitarra');
Route::post('/cadastrar-guitarra', [GuitarraController::class, 'SalvarBancoGuitarra'])->name('salvar-banco');