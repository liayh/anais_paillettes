<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index(): void
    {
        $serviceModel = new Service();

        $this->render('pages/services', [
            'pageTitle' => 'Prestations',
            'services' => $serviceModel->all(),
        ]);
    }

    public function category(): void
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        foreach (config('site')['navigation'] as $item) {
            if ($item['url'] === $path) {
                $model = new Service();
                $services = array_filter(array_map(
                    fn (string $slug) => $model->findBySlug($slug),
                    $item['services'] ?? []
                ));
                $this->render('pages/category', [
                    'pageTitle' => $item['label'],
                    'category' => $item,
                    'services' => $services,
                ]);
                return;
            }
        }
    }

    public function show(): void
    {
        $slug = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $serviceModel = new Service();
        $service = $serviceModel->findBySlug($slug);

        if ($service === null) {
            http_response_code(404);
            $this->render('pages/404', ['pageTitle' => 'Introuvable']);
            return;
        }

        $this->render('pages/service-show', [
            'pageTitle' => $service['title'],
            'service' => $service,
        ]);
    }
}
