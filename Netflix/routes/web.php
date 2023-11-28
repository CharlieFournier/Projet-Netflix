<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\PersonnesController;
use App\Http\Controllers\GenresController;

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

Route::get('/film/show/{film}', 
[FilmsController::class, 'show'])->name('film.show');

Route::get('/film/creation', 
[FilmsController::class, 'create'])->name('films.create');

Route::post('/film', 
[FilmsController::class, 'store'])->name('films.store');

Route::delete('/films/{id}',
[FilmsController::class, 'destroy'])->name('films.destroy');

Route::get('/films/modifier/{film}', 
[FilmsController::class, 'edit'])->name('films.edit');

Route::patch('/films/modifier/{film}',
[FilmsController::class, 'update'])->name('films.update');

Route::get('/acteur', 
[PersonnesController::class, 'index'])->name('personnes.index');

Route::get('/acteur/show/{Personne}', 
[PersonnesController::class, 'show'])->name('personnes.show');

Route::get('/acteur/creation', 
[PersonnesController::class, 'create'])->name('personnes.create');

Route::post('/acteur', 
[PersonnesController::class, 'store'])->name('personnes.store');

Route::delete('/acteur/{id}',
[PersonnesController::class, 'destroy'])->name('personnes.destroy');

