<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/',[PostController::class, 'index'])->name('index');
Route::get('/create',[PostController::class, 'create'])->name('create');
Route::post('/store',[PostController::class, 'store'])->name('store');
