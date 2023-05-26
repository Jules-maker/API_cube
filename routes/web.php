<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KeywordController;
use App\Http\Controllers\DashboardController;
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
    $products = App\Models\Product::all();
    return view('dashboard', ['products' => $products]);
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/produits', [ProductController::class, 'index'])->name('produits');
Route::delete('/produits/{product}', [ProductController::class,'destroy'])->name('products.destroy');
Route::post('/produits', [ProductController::class, 'store'])->name('products.store');
Route::get('/produits/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/produits/{product}', [ProductController::class, 'update'])->name('products.update');


    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');


Route::get('/statut-commande', function () {
    return view('order_status');
})->middleware(['auth', 'verified'])->name('order_status');

Route::get('/mots-cles-et-reponses', [KeywordController::class, 'index'])->name('keywords.index');
Route::post('/mots-cles-et-reponses', [KeywordController::class, 'store'])->name('keywords.store');
Route::get('/mots-cles-et-reponses/{keyword}/edit', [KeywordController::class, 'edit'])->name('keywords.edit');
Route::put('/mots-cles-et-reponses/{keyword}', [KeywordController::class, 'update'])->name('keywords.update');
Route::delete('/mots-cles-et-reponses/{keyword}', [KeywordController::class, 'destroy'])->name('keywords.destroy');


Route::get('/donnees-utilisateurs', function () {
    return view('user_data');
})->middleware(['auth', 'verified'])->name('user_data');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
