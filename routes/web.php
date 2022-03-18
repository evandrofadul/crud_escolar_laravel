<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\UserController;

Route::get('/',[UserController::class, 'index']);

Route::post('/check',[UserController::class, 'check'])->name('login.check');
Route::get('/check',[UserController::class, 'check'])->middleware('auth');

Route::get('/logout',[UserController::class, 'logout'])->name('user.logout');

Route::get('/login', [UserController::class, 'index'])->name('login');

Route::resource("/aluno", AlunoController::class)->middleware('auth');
Route::resource("/turma", TurmaController::class)->middleware('auth');