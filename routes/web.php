<?php

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

use App\Http\Controllers\AgendamentoController;

Route::get('/', [AgendamentoController::class, 'index']);

Route::get('/agendamentos/create', [AgendamentoController::class, 'create']);

Route::get('/relatorios', [AgendamentoController::class, 'relatorios']);

Route::post('/agendamentos', [AgendamentoController::class, 'store']);

Route::get('/agendamentos/{id}', [AgendamentoController::class, 'show']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {return view('dashboard');})->name('dashboard');
