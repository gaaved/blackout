<?php

use Blackout\Route;
use App\Controllers\DefaultController;
use \App\Controllers\UserController;

Route::get('/', [DefaultController::class, 'homepage']);
Route::get('/about', [DefaultController::class, 'about']);
Route::get('/contacts', [DefaultController::class, 'contacts']);

Route::post('/users/create', [UserController::class, 'create']);