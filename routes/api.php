<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('games', [GameController::class, 'indexAll']);
Route::get('games/{id}', [GameController::class, 'show']);
Route::get('/games/category/{category}', [GameController::class, 'category']);
?>