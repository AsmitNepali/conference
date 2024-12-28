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

Route::prefix('/conferences')->group(function () {
   Route::get('/', [ConferenceController::class, 'index'])->name('conference.index');
   Route::get('/create', [ConferenceController::class, 'create'])->name('conference.create');
   Route::post('/', [ConferenceController::class, 'store'])->name('conference.store');
   Route::get('{conference}/edit', [ConferenceController::class, 'edit'])->name('conference.edit');
   Route::put('{conference}', [ConferenceController::class, 'update'])->name('conference.update');
   Route::delete('{conference}', [ConferenceController::class, 'destroy'])->name('conference.destroy');
});

Route::prefix('/attendee')->group(function () {
    Route::get('/', [\App\Http\Controllers\AttendeeController::class, 'index'])->name('attendee.index');
    Route::get('/create', [\App\Http\Controllers\AttendeeController::class, 'create'])->name('attendee.create');
    Route::post('/', [\App\Http\Controllers\AttendeeController::class, 'store'])->name('attendee.store');
    Route::get('{attendee}/edit', [\App\Http\Controllers\AttendeeController::class, 'edit'])->name('attendee.edit');
    Route::put('{attendee}', [\App\Http\Controllers\AttendeeController::class, 'update'])->name('attendee.update');
    Route::delete('{attendee}', [\App\Http\Controllers\AttendeeController::class, 'destroy'])->name('attendee.destroy');
});
