<?php


use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [IndexController::class, 'about']);
Route::get('/contact', [IndexController::class, 'contact']);

Route::get('/job', [JobController::class, 'index']);
Route::get('/blog', action: [PostController::class, 'index']);
Route::get('/blog/create', action: [PostController::class, 'create']);
Route::get('/blog/{id}', action: [PostController::class, 'show']);