<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\RecettesController;
use App\Models\Publication;
use App\Models\Recettes;

Route::get('/', function () {
    return view('welcome');
});
Route::get('publication', [PublicationController::class, 'index']);
// Route::get('recette', [RecettesController::class, 'index']);
// Route::get('/recettes', [RecettesController::class, 'index']);
Route::get('/recettes', function () {
    return view('recettes');
});
