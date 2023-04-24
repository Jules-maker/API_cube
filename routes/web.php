<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/produits', function () {
    return view('produits');
})->middleware(['auth', 'verified'])->name('produits');

Route::get('/categories', function () {
    return view('categories');
})->middleware(['auth', 'verified'])->name('categories');

Route::get('/statut-commande', function () {
    return view('statut-commande');
})->middleware(['auth', 'verified'])->name('statut-commande');

Route::get('/mots-cles-et-reponses', function () {
    return view('mots-cles-et-reponses');
})->middleware(['auth', 'verified'])->name('mots-cles-et-reponses');

Route::get('/donnees-utilisateurs', function () {
    return view('donnees-utilisateurs');
})->middleware(['auth', 'verified'])->name('donnees-utilisateurs');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
