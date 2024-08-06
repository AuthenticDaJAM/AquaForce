<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function (){
    return view('about-us');
})->name('about-us');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');
});


// Middleware para la búsqueda de dispositivos
Route::middleware(['auth'])->group(function () {
    Route::get('/devices', [DeviceController::class, 'index'])->name('devices');
    Route::get('/devices/{device_id}/config', [DeviceController::class, 'showConfig'])->name('devices.config');
});

