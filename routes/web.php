<?php

use App\Http\Controllers\web\CityController;
use App\Http\Controllers\web\DistrictController;
use App\Http\Controllers\web\DashboardController;
use App\Http\Controllers\web\MesaageController;
use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/', [DashboardController::class ,'index'])->name('dashboard.index')->middleware('auth');

// Cities CRUD
Route::prefix('cities')->middleware('auth')->group(function() {
    Route::get('/', [CityController::class, 'index'])->name('cities.index');
    Route::get('/create', [CityController::class, 'create'])->name('cities.create');
    Route::post('/', [CityController::class, 'store'])->name('cities.store');
    Route::get('/{city}', [CityController::class, 'edit'])->name('cities.edit');
    Route::put('/{city}', [CityController::class, 'update'])->name('cities.update');
    Route::delete('/{city}', [CityController::class, 'destroy'])->name('cities.destroy');
});

// Districts CRUD
Route::prefix('districts')->middleware('auth')->group(function() {
    Route::get('/', [DistrictController::class,'index'])->name('districts.index');
    Route::get('/create',[DistrictController::class,'create'])->name('districts.create');
    Route::post('/',[DistrictController::class,'store'])->name('districts.store');
    Route::get('/{district}',[DistrictController::class,'edit'])->name('districts.edit');
    Route::put('/{district}',[DistrictController::class,'update'])->name('districts.update');
    Route::delete('/{district}',[DistrictController::class,'destroy'])->name('districts.destroy');
});

// Messages CRUD
Route::prefix('messages')->middleware('auth')->group(function() {
    Route::get('/', [MesaageController::class,'index'])->name('messages.index');
    Route::get('/create', [MesaageController::class,'create'])->name('messages.create');
    Route::delete('/{message}', [MesaageController::class,'destroy'])->name('messages.destroy');
});



require __DIR__.'/auth.php';