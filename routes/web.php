<?php


use App\Http\Controllers\BateriaController;
use App\Http\Controllers\BaixoController;
use App\Http\Controllers\GuitarraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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




Route::get('/', [HomeController::class, 'MostrarHome'])->name('home');


//GTR
Route::get('/editar-guitarra', [GuitarraController::class, 'EditarGuitarra'])->name('editar-guitarra');
Route::get('/cadastrar-guitarra', [GuitarraController::class, 'CadastroGuitarra'])->name('cadastrar-guitarra');
Route::post('/cadastrar-guitarra', [GuitarraController::class, 'SalvarBancoGuitarra'])->name('salvar-banco');
Route::delete('/editar-guitarra/{registrosGuitarras}', [GuitarraController::class, 'ApagarBancoGuitarra'])->name('apagar-guitarra');
//editar
Route::get('/alterar-guitarra/{registrosGuitarras}', [GuitarraController::class, 'AlterarGuitarra'])->name('alterar-guitarra');
Route::put('/editar-guitarra/{registrosGuitarras}', [GuitarraController::class, 'AlterarBancoGuitarra'])->name('alterar-banco-guitarra');





//BAIXO
Route::get('/editar-baixo', [BaixoController::class, 'EditarBaixo'])->name('editar-baixo');
Route::get('/cadastrar-baixo', [BaixoController::class, 'CadastroBaixo'])->name('cadastrar-baixo');
Route::post('/cadastrar-baixo', [BaixoController::class, 'SalvarBancoBaixo'])->name('salvar-banco-baixo');
Route::delete('/editar-baixo/{registrosBaixos}', [BaixoController::class, 'ApagarBancoBaixo'])->name('apagar-baixo');
//editar
Route::get('/alterar-baixo/{registrosBaixos}', [BaixoController::class, 'AlterarBaixo'])->name('alterar-baixo');
Route::put('/editar-baixo/{registrosBaixos}', [BaixoController::class, 'AlterarBancoBaixo'])->name('alterar-banco-baixo');




//BATERIA
Route::get('/editar-bateria', [BateriaController::class, 'EditarBateria'])->name('editar-bateria');
Route::get('/cadastrar-bateria', [BateriaController::class, 'CadastroBateria'])->name('cadastrar-bateria');
Route::post('/cadastrar-bateria', [BateriaController::class, 'SalvarBancoBateria'])->name('salvar-banco-bateria');
Route::delete('/editar-bateria/{registrosBaterias}', [BateriaController::class, 'ApagarBancoBateria'])->name('apagar-bateria');
//editar
Route::get('/alterar-bateria/{registrosBaterias}', [BateriaController::class, 'AlterarBateria'])->name('alterar-bateria');
Route::put('/editar-bateria/{registrosBaterias}', [BateriaController::class, 'AlterarBancoBateria'])->name('alterar-banco-bateria');

