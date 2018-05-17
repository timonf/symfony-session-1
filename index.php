<?php

use App\GreetController;

include 'vendor/autoload.php';

$controller = new GreetController();

$controller->greet();
