<?php

namespace App\Controllers;

use App\Core\Controller;

class GalleryController extends Controller
{
    public function show(): void
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach (config('site')['galleries'] as $folder => $gallery) {
            if ($gallery['url'] === $path) {
                $this->render('pages/gallery', [
                    'pageTitle' => $gallery['title'],
                    'gallery' => $gallery,
                    'galleryFolder' => $folder,
                ]);
                return;
            }
        }
    }
}
