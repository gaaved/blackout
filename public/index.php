<?php
require_once '../vendor/autoload.php';
require_once '../app/routes/web.php';

//use App\Controllers\DefaultController;
//
$kernel = new \Blackout\Kernel();
$kernel->boot();


dd($_SERVER);