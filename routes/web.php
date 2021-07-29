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

Route::get('/cliente/{id}', [App\Http\Controllers\Api\ClientController::class, 'show'])->name('/cliente/{id}');
Route::get('/clientes', [App\Http\Controllers\Api\ClientController::class, 'index'])->name('/clientes');
Route::get('/clientes/cadastrar', [App\Http\Controllers\Api\ClientController::class, 'create'])->name('clientes/cadastrar');
Route::get('/cliente/{id}/editar', [App\Http\Controllers\Api\ClientController::class, 'edit'])->name('cliente/{id}/editar');
Route::put('/cliente/{id}', [App\Http\Controllers\Api\ClientController::class, 'update'])->name('/cliente/{id}');
Route::delete('/cliente/{id}', [App\Http\Controllers\Api\ClientController::class, 'destroy'])->name('/cliente/{id}');
Route::post('/clientes', [App\Http\Controllers\Api\ClientController::class, 'store'])->name('/clientes');