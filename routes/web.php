<?php

use App\Http\Controllers\ProductController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/products',[ProductController::class, 'index'])->name('product.index');

Route::get('/products/create',[ProductController::class , 'create'])->name('product.create');

Route::post('/products/create',[ProductController::class, 'store'])->name('product.store');

Route::get('/products/{product}/edit',[ProductController::class, 'edit'])->name('product.edit');

Route::put('/products/update/{product}',[ProductController::class, 'update'])->name('product.update');

Route::get('/products/{product}',[ProductController::class,'delete'])->name('product.delete');


require __DIR__.'/auth.php';
