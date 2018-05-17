<?php

use App\GreetController;
use Symfony\Component\HttpFoundation\Request;

include 'vendor/autoload.php';

$request = Request::createFromGlobals();

$controller = new GreetController();
$controller->greet($request);
