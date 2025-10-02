<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// หน้าแรก
Route::get('/', [HomeController::class, 'index'])->name('home');

// Position Routes
Route::prefix('positions')->group(function () {
    Route::get('/', [PositionController::class, 'index'])->name('positions.index');
    Route::get('/create', [PositionController::class, 'create'])->name('positions.create');
    Route::post('/', [PositionController::class, 'store'])->name('positions.store');
});

// Employee Routes
Route::prefix('employees')->group(function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/', [EmployeeController::class, 'store'])->name('employees.store');
});