<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Service;

class HomeController extends Controller
{
    public function index(): void
    {
        $serviceModel = new Service();
        $site = config('site');

        $this->render('pages/home', [
            'pageTitle' => 'Accueil',
            'hero' => $site['hero'],
            'services' => $serviceModel->all(),
            'stats' => $site['stats'],
        ]);
    }
}
