<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/2', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello Wael !';
});

Route::get('/job', [JobController::class, 'index']);