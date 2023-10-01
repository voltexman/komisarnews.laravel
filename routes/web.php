<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;

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

// Route::resource('articles', PostController::class)->names([
// 'index' => 'articles.list',
// 'show' => 'article.show'
// ]);

Route::get('/', [MainController::class, 'show'])->name('main.show');

Route::get('/contacts', [ContactController::class, 'show'])->name('contacts.show');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');

Route::post('/orders/store', [OrderController::class, 'store'])->name('orders.store');

Route::get('/articles', [PostController::class, 'list'])->name('articles.list');
Route::get('/{slug}', [PostController::class, 'show'])->name('article.show');
