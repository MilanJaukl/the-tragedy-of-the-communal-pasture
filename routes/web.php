<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LivewireController;
use App\Http\Controllers\UserController;

Route::get('/', [IndexController::class, 'index'])->name('get.index.index');

Route::get('/login', [UserController::class, 'login'])->name('get.user.login');
Route::post('/login', [AuthController::class, 'login'])->name('post.auth.login');
Route::get('/lobby/{lobby:code}', [GameController::class, 'lobby'])->name('get.game.lobby');

Route::group(['middleware' => ['role:teacher']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('get.admin.index');
    Route::get('/admin/create-game', [AdminController::class, 'createGame'])->name('get.admin.createGame');
    Route::get('/admin/lobby', [AdminController::class, 'lobby'])->name('get.admin.lobby');
});

Route::get('/livewire', [LivewireController::class, 'index']);
