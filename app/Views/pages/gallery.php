<section class="page-banner page-banner-center">
    <div class="container">
        <span class="eyebrow">Galerie</span>
        <h1><?= htmlspecialchars($gallery['title']) ?></h1>
        <p><?= htmlspecialchars($gallery['subtitle']) ?></p>
        <div class="hero-actions">
            <a class="btn btn-outline" href="<?= url($gallery['back']['url']) ?>">‹ <?= htmlspecialchars($gallery['back']['label']) ?></a>
        </div>
    </div>
</section>

<?php
$galleryPreview = null;
require base_path('app/Views/partials/gallery.php');
?>

<section class="section mc-cta">
    <div class="container mc-narrow mc-center">
        <a class="btn mc-cta-btn" href="<?= url('/contact') ?>">💗 Demander un devis</a>
    </div>
</section>
