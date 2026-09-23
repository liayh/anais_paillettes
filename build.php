<?php

// Génère une version HTML statique du site dans _site/ (pour GitHub Pages).
// Usage : BASE_URL=/nom-du-depot php build.php

declare(strict_types=1);

require_once __DIR__ . '/app/Core/helpers.php';
require_once __DIR__ . '/app/Core/Autoloader.php';

use App\Core\App;
use App\Core\Autoloader;
use App\Core\View;

Autoloader::register();

$output = __DIR__ . '/_site';

if (is_dir($output)) {
    exec('rm -rf ' . escapeshellarg($output));
}
mkdir($output, 0777, true);

$render = static function (callable $callback): string {
    ob_start();
    $callback();
    return ob_get_clean();
};

foreach ((new App())->router()->paths('GET') as $path) {
    $_SERVER['REQUEST_URI'] = $path;
    $_SERVER['REQUEST_METHOD'] = 'GET';

    $html = $render(fn () => (new App())->run());
    $dir = rtrim($output . $path, '/');

    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    file_put_contents($dir . '/index.html', $html);
    echo 'OK ' . $path . PHP_EOL;
}

$_SERVER['REQUEST_URI'] = '/404';
file_put_contents($output . '/404.html', $render(fn () => View::render('pages/404', ['pageTitle' => 'Introuvable'])));

exec('cp -r ' . escapeshellarg(__DIR__ . '/public') . ' ' . escapeshellarg($output . '/public'));
touch($output . '/.nojekyll');

echo 'Site généré dans _site/' . PHP_EOL;
