<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\RecettesController;
use App\Http\Controllers\CommentaireController;
// use App\Models\Publication;
// use App\Models\Recettes;


// pubs routes
Route::get('/', [PublicationController::class, 'index'])->name('publication.index');
Route::post('/publish', [PublicationController::class, 'store'])->name('publication.store');
Route::get('/publication', [PublicationController::class, 'Experiences'])->name('publication.Experiences');
Route::get('/publication/{id}', [PublicationController::class, 'show'])->name('publication.show');

// recettes routes
Route::get('/recettes', [RecettesController::class, 'index'])->name('recettes.index');
Route::get('/recettes/{id}', [RecettesController::class, 'show']);
Route::post('/recettes/store', [RecettesController::class, 'store'])->name('recettes.store');

// comments routes
Route::post('/comment', [CommentaireController::class, 'store'])->name('comment.store');

