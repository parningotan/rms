<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DatabaseController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::group(['prefix' => 'device'], function () {
    Route::get('/device', [DeviceController::class, 'index'])->name('device.index');
});

Route::group(['prefix' => 'setting'], function () {
    Route::get('/database', [DatabaseController::class, 'index'])->name('database.index');
});

