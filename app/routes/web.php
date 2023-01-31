<?php

use Blackout\Route;
use App\Controllers\DefaultController;

Route::get('/', [DefaultController::class, 'about']);
Route::get('/about', [DefaultController::class, 'about']);
Route::get('/contacts', [DefaultController::class, 'about']);