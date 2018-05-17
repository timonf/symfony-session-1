<?php

namespace App;

use Symfony\Component\HttpFoundation\Request;

class GreetController
{
    public function greet(Request $request)
    {
        echo 'Hello ' . $request->query->get('name', 'World') . '!';
    }
}
