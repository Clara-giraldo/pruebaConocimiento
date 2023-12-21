<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PreferenciaController;
use App\Http\Controllers\FavoritoController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Auth;
Route::get('/create',[UsuariosController::class, 'create'])->name('usuarios.create');
Route::post('/store',[UsuariosController::class, 'store'])->name('usuarios.store');
Route::post('/index',[UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('/logados', [AuthController::class, 'logados'])->name('logados');

Route::get('/', [AuthController::class, 'index'])->name('home');
Route::view('/login', 'login')->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/noticias', [AuthController::class, 'noticias'])->name('noticias');
Route::get('/preferencias', [AuthController::class, 'preferencias'])->name('preferencias');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout', function(){
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('login');
});

//preferencias
Route::get('/preferencias', [PreferenciaController::class, 'edit'])->name('preferencias.edit')->middleware('auth');
Route::put('/preferencias', [PreferenciaController::class, 'update'])->name('preferencias.update')->middleware('auth');
//

//favoritas
Route::get('/favoritas', [FavoritoController::class, 'index'])->name('favoritas.index')->middleware('auth');
Route::post('/addfavoritas/{id}', [FavoritoController::class, 'store'])->name('favoritas.store')->middleware('auth');
Route::delete('/delfavoritas/{id}', [FavoritoController::class, 'destroy'])->name('favoritas.destroy')->middleware('auth');
//
Route::get('/dashboard', [NoticiaController::class, 'index'])->name('noticias.index')->middleware('auth');



