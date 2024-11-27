<?php

use App\Http\Controllers\Frontend\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/architecture', [HomeController::class, 'architecture'])->name('architecture');
Route::get('/contact_us', [HomeController::class, 'contactus'])->name('contactus');
Route::get('/interior', [HomeController::class, 'interior'])->name('interior');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/blog/details', [HomeController::class, 'blogDetails'])->name('blogDetails');

