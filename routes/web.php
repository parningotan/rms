<?php

use App\Http\Controllers\DeviceController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::group(['prefix' => 'setting'], function () {
    Route::get('/device', [DeviceController::class, 'index'])->name('device.index');
});
