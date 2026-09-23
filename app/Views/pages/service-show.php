<section class="page-banner page-banner-center">
    <div class="container">
        <span class="eyebrow">Prestation</span>
        <h1><?= htmlspecialchars($service['title']) ?></h1>
        <p><?= htmlspecialchars($service['short']) ?></p>
    </div>
</section>

<section class="section service-page">
    <div class="container">
        <div class="info-panel service-panel">
            <h2>Présentation</h2>
            <p><?= htmlspecialchars($service['description']) ?></p>
            <ul class="check-list">
                <?php foreach ($service['highlights'] as $highlight): ?>
                    <li><?= htmlspecialchars($highlight) ?></li>
                <?php endforeach; ?>
            </ul>
            <div class="hero-actions">
                <a class="btn" href="<?= url('/contact') ?>">Demander un devis</a>
                <a class="btn btn-outline" href="<?= url('/prestations') ?>">Retour aux prestations</a>
            </div>
        </div>
    </div>
</section>
