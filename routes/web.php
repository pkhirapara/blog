<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;





Route::view('/', 'user.home');

Route::get('/about-us', [AboutController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);