<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return session('message');
});

Route::get('/login', [UserController::class, 'login'])->name('get.user.login');
Route::post('/login', [AuthController::class, 'login'])->name('post.auth.login');


Route::group(['middleware' => ['role:teacher']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('get.admin.index');
});

Route::get('/test', function () {
    return 'test';
})->name('test');
