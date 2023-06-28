<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use PHPUnit\Framework\Attributes\PostCondition;

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


Route::get('/posts', [PostController::class, 'posts']);

// Task - 6
Route::get('countPost/{id}', [PostController::class, 'categoryPost']);

// Task - 7
Route::get('/posts/{id}/delete', [PostController::class, 'deletePost']);

// Task - 8
Route::get('/tresh', [PostController::class, 'softDel']);

// Task - 9
Route::get('/posts', [PostController::class, 'posts']);

// Task - 10
Route::get('/categories/{id}/posts', [CategoryController::class, 'getPosts']);


// Task - 11
Route::get('/categories/{id}/latest-post', [CategoryController::class, 'latestCat']);

// Task - 12
Route::get('/latest-post', [CategoryController::class, 'latestPost']);
