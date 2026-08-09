<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ContactController;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('services', ServiceController::class)->only(['index','store','update','destroy']);
    Route::resource('projects', ProjectController::class)->only(['index','store','update','destroy']);
    Route::resource('galleries', GalleryController::class)->only(['index','store','update','destroy']);
    Route::resource('articles', ArticleController::class)->only(['index','store','update','destroy']);
    Route::get('contacts', [ContactController::class, 'index'])
            ->name('contacts.index');
    Route::put('contacts/{contact}', [ContactController::class, 'update'])
            ->name('contacts.update');
});

require __DIR__.'/auth.php';
