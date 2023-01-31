<?php

use Blackout\Route;
use App\Controllers\DefaultController;

Route::get('/blackout/public/', [DefaultController::class, 'about']);
Route::get('/blackout/public/about', [DefaultController::class, 'about']);
Route::get('/blackout/public/contacts', [DefaultController::class, 'about']);