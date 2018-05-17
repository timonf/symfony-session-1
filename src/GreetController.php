<?php

namespace App;

class GreetController
{
    public function greet()
    {
        echo 'Hello ' . $_GET['name'] . '!';
    }
}
