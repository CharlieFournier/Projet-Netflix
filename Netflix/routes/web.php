<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\PersonnesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// de quoi de simple

Route::get('/', 
[FilmsController::class, 'index'])->name('films.index');

Route::get('/show', 
[FilmsController::class, 'Show'])->name('films.show');

Route::get('/Personnage', 
[PersonnesController::class, 'index'])->name('personnes.index');

//Route::get('/films/{films}',)