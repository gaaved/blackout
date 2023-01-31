<?php
require_once '../vendor/autoload.php';
require_once '../app/routes/web.php';

//use App\Controllers\DefaultController;
//
//$defaultController = new DefaultController();
//echo $defaultController->homepage();


dd(\Blackout\Route::getList());