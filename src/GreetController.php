<?php

namespace App;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class GreetController
{
    public function greet(Request $request): JsonResponse
    {
        return JsonResponse::create([
            'message' => 'Hello ' . $request->query->get('name', 'World') . '!',
        ]);

        // alternative without named constructor/factory:
        // return new JsonResponse([
        //     'message' => 'Hello ' . $request->query->get('name', 'World') . '!',
        // ]);
    }
}
