<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(CategoryController::class)->prefix('category')->group(function(){
    Route::get('/', 'getCategories'); // Get all categories
    Route::post('/', 'createCategory'); // Create a category
    Route::get('/{categoryId}', 'getCategory'); // Get a specific category
    Route::patch('/{categoryId}', 'updateCategory'); // Update a category
    Route::delete('/{categoryId}', 'deleteCategory'); // Delete a category
});

Route::controller(ProductController::class)->prefix('product')->group(function(){
    Route::get('/', 'getProducts'); // Get all products
    Route::post('/', 'createProduct'); // Create a product
    Route::get('/{productId}', 'getProduct'); // Get a specific product
    Route::patch('/{productId}', 'updateProduct'); // Update a product
    Route::delete('/{productId}', 'deleteProduct'); // Delete a product
});
