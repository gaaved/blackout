<?php
require_once '../vendor/autoload.php';
require_once '../app/routes/web.php';

$kernel = new \Blackout\Kernel();
$kernel->boot();

