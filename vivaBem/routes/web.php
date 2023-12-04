<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModalidadesController;
use App\Http\Controllers\OrcamentoController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\TreinoController;
use Faker\Guesser\Name;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('contato', [ContatoController::class, 'index'])->name('contato');
Route::get('modalidade', [ModalidadesController::class, 'index'])->name('modalidades');
Route::get('treino', [TreinoController::class, 'index'])->name('treino');
Route::get('sobre',[SobreController::class, 'index'])->name('sobre');
Route::get('orcamento', [OrcamentoController::class, 'index'])->name('orcamento');

Route::get('modalidades/musculacao', [ModalidadesController::class, 'musculacao'])->name('modalidades.musculacao');
Route::get('modalidades/peso', [ModalidadesController::class, 'peso'])->name('modalidades.peso');
Route::get('modalidades/meditacao', [ModalidadesController::class, 'meditacao'])->name('modalidades.meditacao');
Route::get('modalidades/lutas', [ModalidadesController::class, 'luta'])->name('modalidades.lutas');
Route::get('modalidades/natacao', [ModalidadesController::class, 'natacao'])->name('modalidades.natacao');
Route::get('modalidades/aerobico', [ModalidadesController::class, 'aerobico'])->name('modalidades.aerobico');


