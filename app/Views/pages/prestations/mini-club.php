<?php
$phone = $site['brand']['phone'];
$universes = [
    ['icon' => '🛋️', 'title' => 'Coin douillet', 'text' => 'Livres, poupées et espace calme.'],
    ['icon' => '🧸', 'title' => 'Tapis de jeux', 'text' => 'Constructions et petites voitures.'],
    ['icon' => '🎨', 'title' => 'Espace créatif', 'text' => 'Coloriages, perles, stickers et activités manuelles.'],
    ['icon' => '🎲', 'title' => 'Jeux de société', 'text' => 'Jeux de société et activités adaptées aux différents âges.'],
    ['icon' => '📸', 'title' => 'Espace photo', 'text' => 'Des accessoires amusants pour poser et garder de jolis souvenirs.'],
];
$timeline = [
    ['icon' => '🎉', 'title' => 'Animations & jeux collectifs', 'text' => 'La soirée est rythmée par des animations et des jeux collectifs adaptés à l’âge des enfants, pour leur permettre de s’amuser, de participer et de partager de vrais moments ensemble.'],
    ['icon' => '🎨', 'title' => 'Maquillage artistique', 'text' => 'Un temps de maquillage artistique professionnel est également proposé pour ajouter une touche de magie à leur soirée.'],
    ['icon' => '🌙', 'title' => 'Du repas au coucher', 'text' => 'Je prends en charge les différents temps de la soirée : accueil des enfants, accompagnement au repas, animations, retour au calme et accompagnement au coucher sur le lieu de réception.'],
];
$events = ['Mariages', 'Baptêmes', 'Anniversaires de famille', 'Fêtes privées', 'Arbres de Noël', 'Événements d’entreprise', 'Journées familles'];
$offers = [
    ['title' => 'Formule Mini-Club', 'price' => '750 €', 'when' => 'De 18h à minuit • Jusqu’à 15 enfants', 'items' => ['Animations et jeux collectifs', 'Maquillage artistique professionnel', 'Espace aménagé avec plusieurs univers', 'Accueil, repas, retour au calme et coucher', 'Tout le matériel fourni']],
    ['title' => 'Le coin cosy', 'price' => '+ 250 €', 'when' => 'Un espace extérieur chaleureux', 'items' => ['Deux tipis, tapis et coussins', 'Jeux d’extérieur', 'Jeux d’adresse en bois', 'Bulles']],
    ['title' => 'L’Instant Bulles', 'price' => '+ 290 €', 'when' => '30 minutes pendant le vin d’honneur ou l’accueil de vos invités', 'items' => ['Bulles géantes', 'Pluie de bulles', 'Bulles de fumée', 'Effets surprenants', 'Animation poétique et participative']],
];
?>
<section class="page-banner page-banner-center mc-hero">
    <div class="container">
        <span class="eyebrow">Mini-Club</span>
        <h1>Formule Mini&#8209;Club</h1>
        <p class="mc-tagline">Un véritable espace dédié aux enfants</p>
        <p class="an-hero-text">Offrez aux plus jeunes leur propre univers pendant votre événement… et profitez pleinement de votre soirée l’esprit léger.</p>
        <div class="hero-actions">
            <a class="btn" href="#formules">Voir les formules · dès 750 €</a>
            <a class="btn btn-outline" href="<?= url('/contact') ?>">Demander un devis</a>
        </div>
    </div>
</section>

<section class="section mc-intro">
    <div class="container mc-narrow">
        <p class="mc-lead">Mariage, fête de famille ou réception d’entreprise : je me déplace directement sur votre lieu de réception pour installer un véritable Mini-Club éphémère, chaleureux et clé en main.</p>
        <p class="mc-goal">Pendant que les adultes profitent de l’événement, les enfants vivent leur propre soirée entre animations, jeux, créativité et moments de détente, dans un espace pensé spécialement pour eux.</p>
    </div>
</section>

<section class="section mc-why">
    <div class="container split-grid">
        <div>
            <h2><span class="brush">Pourquoi choisir un Mini&#8209;Club plutôt qu’une baby&#8209;sitter&nbsp;?</span></h2>
            <p>Parce qu’il ne s’agit pas uniquement de surveiller les enfants.</p>
            <p>Je crée un véritable espace d’animation spécialement pensé pour eux, avec le matériel, les jeux et les activités nécessaires pour rythmer toute leur soirée.</p>
        </div>
        <div class="info-panel">
            <p>Mon expérience dans l’animation ainsi que mes diplômes <strong>BAFA</strong> et <strong>CAP Petite Enfance</strong> me permettent d’adapter les activités aux différents âges tout en assurant un encadrement professionnel.</p>
            <p class="mc-badges-inline">
                <span>🎓 BAFA</span>
                <span>👶 CAP Petite Enfance</span>
                <span>🛡️ Assurance RC Professionnelle</span>
            </p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading mc-center">
            <h2><span class="brush brush-teal">Un espace complet, plusieurs univers</span></h2>
            <p>Un espace complet est aménagé pour les enfants :</p>
        </div>
        <div class="mc-universes">
            <?php foreach ($universes as $universe): ?>
                <article class="mc-universe">
                    <span class="mc-icon" aria-hidden="true"><?= $universe['icon'] ?></span>
                    <h3><?= htmlspecialchars($universe['title']) ?></h3>
                    <p><?= htmlspecialchars($universe['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section mc-outdoor">
    <div class="container mc-narrow mc-center">
        <h2><span class="brush brush-teal">Le coin cosy</span></h2>
        <p>Un espace extérieur chaleureux et soigneusement aménagé pour permettre aux enfants de profiter pleinement des beaux jours et du lieu de réception.</p>
        <p>Deux tipis, tapis et coussins créent un espace confortable qui s’intègre naturellement à votre décoration.</p>
        <p class="mc-goal">Les enfants peuvent profiter de jeux d’extérieur, jeux d’adresse en bois et bulles, dans une ambiance ludique et conviviale adaptée aux différents âges.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading mc-center">
            <h2><span class="brush brush-violet">De 18h à minuit</span></h2>
            <p>Une soirée rien qu’à eux, du début de la fête jusqu’au coucher.</p>
        </div>
        <ol class="mc-timeline">
            <?php foreach ($timeline as $step): ?>
                <li>
                    <span class="mc-icon" aria-hidden="true"><?= $step['icon'] ?></span>
                    <h3><?= htmlspecialchars($step['title']) ?></h3>
                    <p><?= htmlspecialchars($step['text']) ?></p>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<section class="section mc-turnkey">
    <div class="container split-grid">
        <div>
            <h2><span class="brush">Une prestation clé en main</span></h2>
            <p>Chaque installation est adaptée au lieu, au nombre d’enfants et à l’ambiance de votre événement. Tout le matériel nécessaire est fourni.</p>
            <p class="mc-note">Je peux encadrer seule jusqu’à 15 enfants. Au-delà, ou lorsque l’âge des enfants et l’organisation de l’événement le nécessitent, une seconde animatrice peut venir renforcer l’équipe afin de conserver un accompagnement confortable et adapté.</p>
        </div>
        <div class="info-panel">
            <h3>Pas seulement pour les mariages :</h3>
            <ul class="check-list">
                <?php foreach ($events as $event): ?>
                    <li><?= htmlspecialchars($event) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>

<section class="section mc-offers" id="formules">
    <div class="container">
        <div class="section-heading mc-center">
            <h2><span class="brush">Les formules</span></h2>
        </div>
        <div class="mc-offer-grid">
            <?php foreach ($offers as $offer): ?>
                <article class="mc-offer">
                    <div class="mc-offer-head">
                        <h3><?= htmlspecialchars($offer['title']) ?></h3>
                        <p class="mc-price"><?= htmlspecialchars($offer['price']) ?></p>
                        <p class="mc-when"><?= htmlspecialchars($offer['when']) ?></p>
                    </div>
                    <ul class="check-list">
                        <?php foreach ($offer['items'] as $item): ?>
                            <li><?= htmlspecialchars($item) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="mc-prestige">
            <p class="mc-prestige-label">✨ Formule Prestige</p>
            <p class="mc-prestige-price">1 250 €</p>
            <p class="mc-prestige-combo">
                <span>Mini-Club</span> <span aria-hidden="true">+</span>
                <span>Espace Extérieur Enfants</span> <span aria-hidden="true">+</span>
                <span>Instant Bulles</span>
            </p>
            <p class="mc-prestige-note">Une formule pensée pour offrir aux enfants un véritable événement dans l’événement.</p>
        </div>
        <p class="mc-extra">Heure supplémentaire : <strong>80 €</strong></p>
    </div>
</section>

<section class="section mc-cta">
    <div class="container mc-narrow mc-center">
        <h2><span class="brush">Un véritable événement dans l’événement</span></h2>
        <p>Offrez aux plus jeunes leur propre univers… et profitez pleinement de votre soirée l’esprit léger.</p>
        <a class="btn mc-cta-btn" href="<?= url('/contact') ?>">💗 Demander mon devis</a>
        <p class="mc-phone"><a href="tel:+33783659843">📞 <?= htmlspecialchars($phone) ?></a></p>
    </div>
</section>

<?php
$galleryFolder = 'mini-club';
$galleryPreview = 1;
require base_path('app/Views/partials/gallery.php');
?>
