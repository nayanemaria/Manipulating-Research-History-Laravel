<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\HistoricoController;


Route::get('/', [LayoutController::class, 'index'])->name('my-page');
Route::get('/create',[HistoricoController::class, 'insert']);
Route::post('/create',[HistoricoController::class, 'insert']);
Route::get('/',[HistoricoController::class, 'select']);




