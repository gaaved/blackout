<?php
require_once '../vendor/autoload.php';

use App\Controllers\DefaultController;

$defaultController = new DefaultController();
echo $defaultController->homepage();