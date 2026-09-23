<?php
$seo = $site['seo'];
$title = isset($pageTitle) ? $pageTitle . ' | ' . $seo['default_title'] : $seo['default_title'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($seo['meta_description']) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500;600;700&family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= asset('public/assets/css/style.css') ?>">
</head>
<body>
<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="<?= url('/') ?>">
            <span class="brand-title"><?= htmlspecialchars($site['brand']['name']) ?></span>
            <span class="brand-subtitle"><?= htmlspecialchars($site['brand']['location']) ?></span>
        </a>
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-navigation" hidden>Menu <span aria-hidden="true">☰</span></button>
        <nav class="nav" id="main-navigation" aria-label="Navigation principale">
            <ul class="nav-list">
                <?php foreach ($site['navigation'] as $item): ?>
                    <li class="nav-item">
                        <a href="<?= htmlspecialchars(url($item['url'])) ?>"<?= (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) === $item['url']) ? ' aria-current="page"' : '' ?>><?= htmlspecialchars($item['label']) ?></a>
                        <?php if (!empty($item['children'])): ?>
                            <button class="submenu-toggle" type="button" aria-expanded="false" aria-controls="submenu-<?= htmlspecialchars(trim($item['url'], '/')) ?>" aria-label="Afficher les animations : <?= htmlspecialchars($item['label']) ?>">▾</button>
                            <ul class="submenu" id="submenu-<?= htmlspecialchars(trim($item['url'], '/')) ?>" hidden>
                                <?php foreach ($item['children'] as $child): ?>
                                    <li><a href="<?= htmlspecialchars(url($item['url']) . '#' . $child['id']) ?>"><?= htmlspecialchars($child['label']) ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>

<main>
    <?= $content ?>
</main>

<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <h3><?= htmlspecialchars($site['brand']['name']) ?></h3>
            <p><?= htmlspecialchars($site['brand']['tagline']) ?></p>
        </div>
        <div>
            <h4>Contact</h4>
            <p><a href="tel:+33783659843"><?= htmlspecialchars($site['brand']['phone']) ?></a></p>
            <p><a href="mailto:<?= htmlspecialchars($site['brand']['email']) ?>"><?= htmlspecialchars($site['brand']['email']) ?></a></p>
        </div>
        <div>
            <h4>Réseaux</h4>
            <p>Facebook : <?= htmlspecialchars($site['brand']['facebook']) ?></p>
            <p>Instagram : <?= htmlspecialchars($site['brand']['instagram']) ?></p>
        </div>
    </div>
</footer>
<script src="<?= asset('public/assets/js/navigation.js') ?>" defer></script>
</body>
</html>
