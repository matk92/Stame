<?php
use App\Http\Controllers\GameController;

Route::get('games', [GameController::class, 'indexAll']);
Route::get('games/{id}', [GameController::class, 'show']);
Route::get('/games/category/{category}', [GameController::class, 'category']);
?>