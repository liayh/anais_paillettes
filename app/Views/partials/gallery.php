<?php
// Galerie photo : affiche les images déposées dans public/assets/img/galerie/<dossier>/.
// Variables attendues : $galleryFolder, et $galleryPreview (nombre de photos pour un aperçu, null pour tout afficher).
$galleryConfig = config('site')['galleries'][$galleryFolder];
$galleryPath = 'public/assets/img/galerie/' . $galleryFolder;
$galleryImages = array_values(array_filter(
    glob(base_path($galleryPath . '/*')) ?: [],
    fn (string $file) => preg_match('/\.(jpe?g|png|webp)$/i', $file)
));
sort($galleryImages, SORT_NATURAL);
$galleryTotal = count($galleryImages);
$isPreview = $galleryPreview !== null;
if ($isPreview) {
    $galleryImages = array_slice($galleryImages, 0, $galleryPreview);
}
?>
<?php if ($galleryImages !== []): ?>
<section class="section gallery-section">
    <div class="container">
        <?php if ($isPreview): ?>
            <div class="section-heading mc-center">
                <span class="eyebrow">Galerie</span>
                <h2><?= htmlspecialchars($galleryConfig['title']) ?></h2>
                <p><?= htmlspecialchars($galleryConfig['subtitle']) ?></p>
            </div>
        <?php endif; ?>
        <ul class="gallery" data-gallery>
            <?php foreach ($galleryImages as $index => $file): ?>
                <?php
                $src = asset($galleryPath . '/' . rawurlencode(basename($file)));
                $alt = $galleryConfig['alt'] . ' – photo ' . ($index + 1);
                ?>
                <li id="photo-<?= $index + 1 ?>">
                    <?php if ($isPreview): ?>
                        <a class="gallery-item" href="<?= htmlspecialchars(url($galleryConfig['url']) . '#photo-' . ($index + 1)) ?>">
                    <?php else: ?>
                        <button type="button" class="gallery-item" data-gallery-index="<?= $index ?>" aria-label="Agrandir la photo <?= $index + 1 ?>">
                    <?php endif; ?>
                        <img src="<?= htmlspecialchars($src) ?>" alt="<?= htmlspecialchars($alt) ?>" loading="lazy">
                        <span class="gallery-zoom" aria-hidden="true">＋</span>
                    <?= $isPreview ? '</a>' : '</button>' ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <?php if ($isPreview): ?>
            <div class="hero-actions gallery-more">
                <a class="btn" href="<?= url($galleryConfig['url']) ?>">Voir toute la galerie (<?= $galleryTotal ?> photos) ›</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php if (!$isPreview): ?>
<dialog class="lightbox" data-lightbox aria-label="Photo agrandie">
    <button type="button" class="lightbox-close" data-lightbox-close aria-label="Fermer">×</button>
    <button type="button" class="lightbox-nav lightbox-prev" data-lightbox-step="-1" aria-label="Photo précédente">‹</button>
    <figure class="lightbox-figure">
        <img src="" alt="" data-lightbox-image>
        <figcaption data-lightbox-counter></figcaption>
    </figure>
    <button type="button" class="lightbox-nav lightbox-next" data-lightbox-step="1" aria-label="Photo suivante">›</button>
</dialog>

<script>
    (() => {
        const images = [...document.querySelectorAll('[data-gallery] img')];
        const lightbox = document.querySelector('[data-lightbox]');
        const view = lightbox.querySelector('[data-lightbox-image]');
        const counter = lightbox.querySelector('[data-lightbox-counter]');
        let current = 0;

        const show = (index) => {
            current = (index + images.length) % images.length;
            view.src = images[current].src;
            view.alt = images[current].alt;
            counter.textContent = (current + 1) + ' / ' + images.length;
            view.animate([{ opacity: 0, transform: 'scale(0.97)' }, { opacity: 1, transform: 'none' }], { duration: 220, easing: 'ease-out' });
        };
        const open = (index) => {
            show(index);
            if (!lightbox.open) lightbox.showModal();
        };

        document.querySelectorAll('[data-gallery-index]').forEach((button) => {
            button.addEventListener('click', () => open(Number(button.dataset.galleryIndex)));
        });
        lightbox.querySelectorAll('[data-lightbox-step]').forEach((button) => {
            button.addEventListener('click', () => show(current + Number(button.dataset.lightboxStep)));
        });
        lightbox.querySelector('[data-lightbox-close]').addEventListener('click', () => lightbox.close());
        lightbox.addEventListener('click', (event) => {
            if (event.target === lightbox) lightbox.close();
        });
        document.addEventListener('keydown', (event) => {
            if (!lightbox.open) return;
            if (event.key === 'ArrowLeft') show(current - 1);
            if (event.key === 'ArrowRight') show(current + 1);
        });

        // Arrivée depuis l'aperçu : ouvre directement la photo cliquée (#photo-3).
        const match = location.hash.match(/^#photo-(\d+)$/);
        if (match && images[match[1] - 1]) open(match[1] - 1);
    })();
</script>
<?php endif; ?>
<?php endif; ?>
