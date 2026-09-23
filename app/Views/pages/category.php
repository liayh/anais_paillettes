<section class="page-banner">
    <div class="container">
        <span class="eyebrow">Nos animations</span>
        <h1><?= htmlspecialchars($category['label']) ?></h1>
        <p><?= htmlspecialchars($category['intro']) ?></p>
    </div>
</section>
<section class="section">
    <div class="container">
        <?php if (!empty($category['children'])): ?>
            <div class="section-heading">
                <h2>Les animations et les packs</h2>
                <p>Contactez Anaïs pour connaître le contenu des formules et organiser votre événement.</p>
            </div>
            <div class="cards-grid">
                <?php foreach ($category['children'] as $child): ?>
                    <article class="info-panel pack-section" id="<?= htmlspecialchars($child['id']) ?>">
                        <h2><?= htmlspecialchars($child['label']) ?></h2>
                        <a class="text-link" href="<?= url('/contact') ?>">Se renseigner et demander un devis</a>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <?php if ($services): ?>
            <div class="cards-grid">
                <?php foreach ($services as $service): ?>
                    <article class="service-card">
                        <div class="service-card-body">
                            <h2><?= htmlspecialchars($service['title']) ?></h2>
                            <p><?= htmlspecialchars($service['description']) ?></p>
                            <a class="text-link" href="<?= htmlspecialchars(service_url($service['slug'])) ?>">Découvrir cette animation</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <div class="hero-actions"><a class="btn" href="<?= url('/contact') ?>">Contact &amp; Devis</a></div>
    </div>
</section>
