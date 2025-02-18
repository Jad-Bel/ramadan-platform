<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;
use App\Models\Publication;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('publication', PublicationController::class);
