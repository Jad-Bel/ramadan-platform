<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\RecettesController;
use App\Models\Publication;
use App\Models\Recettes;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PublicationController::class, 'index'])->name('publication.index');
Route::post('/publication', [PublicationController::class, 'store'])->name('publication.store');
// Route::get('recette', [RecettesController::class, 'index']);
Route::get('/recettes', [RecettesController::class, 'index'])->name('recettes.index');
Route::get('/recettes/{id}', [RecettesController::class, 'show']);
Route::post('/recettes/store', [RecettesController::class, 'store'])->name('recettes.store');
// Route::get('/recettes', function () {
//     return view('recettes');
// });
