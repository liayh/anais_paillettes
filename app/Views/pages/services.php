<section class="page-banner">
    <div class="container">
        <span class="eyebrow">Catalogue</span>
        <h1>Les prestations</h1>
        <p>Chaque univers peut être réservé seul ou combiné pour créer une formule sur mesure.</p>
    </div>
</section>

<section class="section">
    <div class="container cards-grid">
        <?php foreach ($services as $service): ?>
            <article class="service-card">
                <div class="service-card-body">
                    <h2><?= htmlspecialchars($service['title']) ?></h2>
                    <p class="service-short"><?= htmlspecialchars($service['short']) ?></p>
                    <p><?= htmlspecialchars($service['description']) ?></p>
                    <a class="btn btn-small" href="<?= htmlspecialchars(service_url($service['slug'])) ?>">En savoir plus</a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
