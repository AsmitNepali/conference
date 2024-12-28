<?php

use App\Http\Controllers\ConferenceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('/conference')->group(function () {
   Route::get('/', [ConferenceController::class, 'index'])->name('conference.index');
   Route::get('/conference', [ConferenceController::class, 'create'])->name('conference.create');
   Route::post('/', [ConferenceController::class, 'store'])->name('conference.store');
});
