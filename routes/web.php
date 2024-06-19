<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/games', [GameController::class, 'index'])->name('games.index');
Route::get('/games/add', [GameController::class, 'create'])->name('games.create');
Route::post('/games', [GameController::class, 'store'])->name('games.store');
Route::get('/games/{game}/edit', [GameController::class, 'edit'])->name('games.edit');
Route::put('/games/{game}', [GameController::class, 'update'])->name('games.update');

require __DIR__.'/auth.php';
