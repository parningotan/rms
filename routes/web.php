<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\DeviceProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::group(['prefix' => 'device'], function () {
    Route::get('/device', [DeviceController::class, 'index'])->name('device.index');
    // Route::get('/deviceProfile', [DeviceController::class, 'create'])->name('device.deviceProfile');
    Route::post('/device/store', [DeviceController::class, 'store'])->name('device.store');
});

Route::group(['prefix' => 'setting'], function () {
    Route::get('/database', [DatabaseController::class, 'index'])->name('database.index');
});

Route::get('/deviceProfile', [DeviceProfileController::class, 'index'])->name('deviceProfile.index');
