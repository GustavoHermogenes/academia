<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\instrutorController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ModalidadesController;
use App\Http\Controllers\OrcamentoController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\TreinoController;
use App\Http\Controllers\usuarioController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('treino', [TreinoController::class, 'index'])->name('treino');
Route::get('sobre',[SobreController::class, 'index'])->name('sobre');
Route::get('orcamento', [OrcamentoController::class, 'index'])->name('orcamento');


/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('login',[loginController::class, 'index'])->name('login');
Route::post('login', [loginController::class,'autenticar'])->name('login');

Route::get('dashboard/admin', [adminController::class,'index'])->name('dashboard.admin');
Route::get('dashboard/instrutor', [instrutorController::class, 'index'])->name('dashboard.instrutor');
route::get('dashboard/usuario', [usuarioController::class, 'index'])->name('dashboard.usuario');

/*
|--------------------------------------------------------------------------
| MODALIDADES
|--------------------------------------------------------------------------
*/

Route::get('modalidade', [ModalidadesController::class, 'index'])->name('modalidades');
Route::get('modalidades/musculacao', [ModalidadesController::class, 'musculacao'])->name('modalidades.musculacao');
Route::get('modalidades/peso', [ModalidadesController::class, 'peso'])->name('modalidades.peso');
Route::get('modalidades/meditacao', [ModalidadesController::class, 'meditacao'])->name('modalidades.meditacao');
Route::get('modalidades/lutas', [ModalidadesController::class, 'luta'])->name('modalidades.lutas');
Route::get('modalidades/natacao', [ModalidadesController::class, 'natacao'])->name('modalidades.natacao');
Route::get('modalidades/aerobico', [ModalidadesController::class, 'aerobico'])->name('modalidades.aerobico');

/*
|--------------------------------------------------------------------------
| CONTATO
|--------------------------------------------------------------------------
*/

Route::get('contato', [ContatoController::class, 'index'])->name('contato');
Route::post('/contato/enviar',[ContatoController::class, 'salvarNoBanco'])->name('contato.enviar');
Route::post('/contato/email',[ContatoController::class, 'salvarEmail'])->name('contato.enviarEmail');



