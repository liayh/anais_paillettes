<?php

namespace App\Core;

use App\Controllers\ContactController;
use App\Controllers\HomeController;
use App\Controllers\ServicesController;

class App
{
    public function run(): void
    {
        $this->router()->dispatch($_SERVER['REQUEST_URI'] ?? '/', $_SERVER['REQUEST_METHOD'] ?? 'GET');
    }

    public function router(): Router
    {
        $router = new Router();

        $router->get('/', [HomeController::class, 'index']);
        $router->get('/prestations', [ServicesController::class, 'index']);
        foreach (config('site')['services'] as $service) {
            $router->get('/prestations/' . $service['slug'], [ServicesController::class, 'show']);
        }
        foreach (config('site')['navigation'] as $item) {
            if (isset($item['intro'])) {
                $router->get($item['url'], [ServicesController::class, 'category']);
            }
        }
        $router->get('/contact', [ContactController::class, 'index']);

        return $router;
    }
}
