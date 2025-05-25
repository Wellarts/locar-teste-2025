<?php

use App\Http\Controllers\Contrato;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\FichaAgendamento;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () { return redirect('/admin'); })->name('login');

Route::get('pdf/locacao/{id}',[Contrato::class, 'printLocacao'])->name('imprimirLocacao');
Route::get('pdf/agendamento/{id}',[FichaAgendamento::class, 'printAgendamento'])->name('imprimirAgendamento');

//Route::get('/contrato/form/{id}', [ContratoController::class, 'showForm'])->name('contrato.form');
Route::get('contrato/resultado/{id}', [ContratoController::class, 'gerar'])->name('gerarContrato');