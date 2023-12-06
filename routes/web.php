<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AuthController;

Route::get('/create',[UsuariosController::class, 'create'])->name('usuarios.create');
Route::post('/store',[UsuariosController::class, 'store'])->name('usuarios.store');

Route::get('/', [AuthController::class, 'index'])->name('home');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/custom-login', [AuthController::class, 'login'])->name('custom-login');
Route::get('/logados', [AuthController::class, 'logados'])->name('logados');
//Route::view('/noticias');
