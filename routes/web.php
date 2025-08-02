<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookingController::class, 'index'])->name('index');
Route::get('/create', [BookingController::class, 'create'])->name('create');
Route::post('/', [BookingController::class, 'store'])->name('store');
Route::get('/{id}/edit', [BookingController::class, 'edit'])->name('edit');
Route::put('/{id}', [BookingController::class, 'update'])->name('update');
Route::delete('/{id}', [BookingController::class, 'destroy'])->name('destroy');

