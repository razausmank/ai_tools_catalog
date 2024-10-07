<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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


    // Categories

    Route::resource('category', CategoryController::class);

    // Products

    Route::resource('/product', ProductController::class);

    Route::post('/product/{product}/publish', [ProductController::class, 'publish'])->name('product.publish');
    Route::post('/product/{product}/unpublish', [ProductController::class, 'unpublish'])->name('product.unpublish');

     // Page Module Routes
     Route::get('page/page-hierarchy', [PageController::class, 'pageHierarchy'])->name('page.page_hierarchy');
     Route::post('page/update-page-hierarchy', [PageController::class, 'updatePageHierarchy'])->name('page.update_page_hierarchy');
     Route::resource('page', PageController::class);
});

require __DIR__.'/auth.php';
