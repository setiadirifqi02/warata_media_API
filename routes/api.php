<?php

use App\Http\Controllers\Api\V1\ArticleController;
use App\Http\Controllers\Api\V1\AuthorController;
use App\Http\Controllers\Api\V1\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    Route::apiResource('/articles', ArticleController::class);
    Route::apiResource('/authors', AuthorController::class);
    Route::apiResource('/category', CategoryController::class);
    // Route::apiResource('/articles/{article:slug}', ArticleController::class);
});
