<section class="hero">
    <div class="container hero-grid">
        <div>
            <span class="eyebrow">Animations événementielles</span>
            <h1><?= htmlspecialchars($hero['title']) ?></h1>
            <p class="lead"><?= htmlspecialchars($hero['subtitle']) ?></p>
            <div class="hero-actions">
                <a class="btn" href="<?= htmlspecialchars(url($hero['cta_primary']['url'])) ?>"><?= htmlspecialchars($hero['cta_primary']['label']) ?></a>
                <a class="btn btn-outline" href="<?= htmlspecialchars(url($hero['cta_secondary']['url'])) ?>"><?= htmlspecialchars($hero['cta_secondary']['label']) ?></a>
            </div>
        </div>
        <div class="hero-card">
            <h2>Des univers pour tous vos événements</h2>
            <p>Anniversaires, mariages, festivals, entreprises, collectivités et événements privés.</p>
            <ul class="check-list">
                <li>Maquillage artistique</li>
                <li>Bulles enchantées</li>
                <li>Mini club & animations</li>
            </ul>
        </div>
    </div>
</section>

<section class="stats-section">
    <div class="container stats-grid">
        <?php foreach ($stats as $stat): ?>
            <article class="stat-card">
                <strong><?= htmlspecialchars($stat['number']) ?></strong>
                <span><?= htmlspecialchars($stat['label']) ?></span>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section">
    <div class="container section-heading">
        <span class="eyebrow">Prestations</span>
        <h2>Une vitrine moderne, visuelle et facile à administrer</h2>
        <p>Découvrez les animations et composez votre événement sur mesure.</p>
    </div>
    <div class="container cards-grid">
        <?php foreach ($services as $service): ?>
            <article class="service-card">
                <div class="service-card-body">
                    <h3><?= htmlspecialchars($service['title']) ?></h3>
                    <p class="service-short"><?= htmlspecialchars($service['short']) ?></p>
                    <p><?= htmlspecialchars($service['description']) ?></p>
                    <ul>
                        <?php foreach ($service['highlights'] as $highlight): ?>
                            <li><?= htmlspecialchars($highlight) ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a class="text-link" href="<?= htmlspecialchars(service_url($service['slug'])) ?>">Voir le détail</a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
