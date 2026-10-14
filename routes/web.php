
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/academics', [HomeController::class, 'academics'])->name('academics');

Route::get('/admission', [HomeController::class, 'admission'])->name('admission');

Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
