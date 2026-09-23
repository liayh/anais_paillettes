<?php

namespace App\Core;

class View
{
    public static function render(string $view, array $data = []): void
    {
        extract($data, EXTR_SKIP);

        $site = config('site');
        $viewFile = base_path('app/Views/' . $view . '.php');

        if (!file_exists($viewFile)) {
            throw new \RuntimeException('Vue introuvable : ' . $view);
        }

        ob_start();
        require $viewFile;
        $content = ob_get_clean();

        require base_path('app/Views/layouts/main.php');
    }
}
