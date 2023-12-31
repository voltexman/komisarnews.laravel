<?php

use App\Http\Controllers\Api\FeedbackController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\SeoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {

    Route::apiResource('posts', PostController::class);

    Route::apiResource('orders', OrderController::class)
        ->only(['index', 'status']);

    Route::apiResource('feedbacks', FeedbackController::class)
        ->only(['index']);

    Route::put('/orders/status/{id}', [OrderController::class, 'status']);

    Route::get('/seo/{page}', [SeoController::class, 'show']);
});
