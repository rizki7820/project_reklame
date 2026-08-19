<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [ServiceController::class, 'landing'])->name('landing');

// Public Routes
Route::get('/', [ServiceController::class, 'landing'])->name('landing');
Route::get('/services', [ServiceController::class, 'publicIndex'])->name('services.public');

// Route Proyek Publik
Route::get('/proyek', [ProjectController::class, 'publicIndex'])->name('projects.public');
Route::get('/proyek/{project:slug}', [ProjectController::class, 'show'])->name('projects.show');

// Galeri Publik (support /galeri dan /gallery)
Route::get('/galeri', [GalleryController::class, 'publicIndex'])->name('galleries.public');
Route::get('/gallery', [GalleryController::class, 'publicIndex']);

// Artikel Publik
Route::get('/artikel', [ArticleController::class, 'publicIndex'])->name('articles.public');
Route::get('/artikel/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/kontak', [ContactController::class, 'publicIndex'])->name('contact.public');

// Halaman Sub-Menu Perusahaan
Route::view('/tentang-kami', 'tentang')->name('about.public');
Route::view('/fasilitas', 'fasilitas')->name('facilities.public');
Route::view('/faq', 'faq')->name('faq.public');
/*
|--------------------------------------------------------------------------
| Dashboard & Profile Routes
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('services', ServiceController::class)->only(['index', 'store', 'update', 'destroy']);
    Route::resource('projects', ProjectController::class)->only(['index', 'store', 'update', 'destroy']);
    Route::resource('galleries', GalleryController::class)->only(['index', 'store', 'update', 'destroy']);
    Route::resource('articles', ArticleController::class)->only(['index', 'store', 'update', 'destroy']);
    Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::put('contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');
});

require __DIR__ . '/auth.php';