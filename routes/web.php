<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'main')->name('main');
Route::view('/contacts', 'contacts')->name('contacts');

Route::get('/articles', [PostController::class, 'list'])->name('articles.list');
Route::get('/{slug}', [PostController::class, 'show'])->name('article.show');
