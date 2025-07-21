<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClienteController;
use App\Models\Cliente;

Route:: get('/', [LoginController::class, 'index']) ->name('login.form');
Route:: post('/login', [LoginController::class, 'login']) ->name('login');
Route:: post('/register', [LoginController::class, 'register']) ->name('register');
Route:: resource('clientes', ClienteController::class) ->middleware('auth');

Route:: get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route:: post('/logout', [LoginController::class, 'logout'])->name('logout'); 