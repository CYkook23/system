<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\ProductController;


//CATEGORIES

Route::get('/categories',[CategoryController::class, 'index'])
->name('categories.index');

//PRODUCTS

Route::get('/products',[ProductController::class, 'index'])
->name('products.index');

//DEPARTMENTS
Route::get('/departments', [DepartmentController::class, 'index'])
->name('departments.index');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
