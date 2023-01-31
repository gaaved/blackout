<?php

use Blackout\Route;
use App\Controllers\DefaultController;

Route::get('/about', [DefaultController::class, 'about']);