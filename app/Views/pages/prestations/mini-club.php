<?php
$phone = $site['brand']['phone'];
$spaces = [
    ['icon' => '🛋️', 'text' => 'Coin douillet avec livres, poupées et espace calme'],
    ['icon' => '🧸', 'text' => 'Tapis de jeux avec constructions et petites voitures'],
    ['icon' => '🎨', 'text' => 'Espace créatif : coloriages, perles, stickers et activités manuelles'],
    ['icon' => '🎲', 'text' => 'Jeux de société et activités adaptées aux différents âges'],
    ['icon' => '📸', 'text' => 'Espace photo avec accessoires amusants'],
];
$faq = [
    [
        'question' => 'Pourquoi choisir un Mini-Club plutôt qu’une baby-sitter ?',
        'answer' => [
            'Parce qu’il ne s’agit pas uniquement de surveiller les enfants.',
            'Je crée un véritable espace d’animation spécialement pensé pour eux, avec le matériel, les jeux et les activités nécessaires pour rythmer toute leur soirée.',
            'Mon expérience dans l’animation ainsi que mes diplômes BAFA et CAP Petite Enfance me permettent d’adapter les activités aux différents âges tout en assurant un encadrement professionnel.',
        ],
    ],
    [
        'question' => 'La formule est-elle réservée aux mariages ?',
        'answer' => [
            'Non. Le Mini-Club peut être installé lors de nombreux événements : mariages, baptêmes, anniversaires de famille, fêtes privées, arbres de Noël, événements d’entreprise ou journées familles.',
            'Chaque installation est adaptée au lieu, au nombre d’enfants et à l’ambiance de votre événement.',
        ],
    ],
    [
        'question' => 'Combien d’enfants peuvent être accueillis ?',
        'answer' => [
            'Je peux encadrer seule jusqu’à 15 enfants.',
            'Au-delà, ou lorsque l’âge des enfants et l’organisation de l’événement le nécessitent, une seconde animatrice peut venir renforcer l’équipe afin de conserver un accompagnement confortable et adapté.',
        ],
    ],
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
        <p>Pendant que les adultes profitent de l’événement, les enfants vivent leur propre soirée entre animations, jeux, créativité et moments de détente, dans un espace pensé spécialement pour eux.</p>
    </div>
</section>

<section class="section mc-offers" id="formules">
    <div class="container">
        <article class="mc-main-offer">
            <header class="mc-main-offer-head">
                <h2>Formule Mini-Club</h2>
                <p class="mc-price">750 €</p>
                <p class="mc-main-offer-when">De 18h à minuit • Jusqu’à 15 enfants</p>
            </header>
            <div class="mc-main-offer-body split-grid">
                <div>
                    <p>La soirée est rythmée par des animations et des jeux collectifs adaptés à l’âge des enfants, pour leur permettre de s’amuser, de participer et de partager de vrais moments ensemble.</p>
                    <p>Un temps de <strong>maquillage artistique professionnel</strong> est également proposé pour ajouter une touche de magie à leur soirée.</p>
                    <p>Je prends également en charge les différents temps de la soirée : accueil des enfants, accompagnement au repas, animations, retour au calme et accompagnement au coucher sur le lieu de réception.</p>
                    <p class="mc-goal">Tout le matériel nécessaire est fourni.</p>
                </div>
                <div>
                    <h3>Un espace complet aménagé avec plusieurs univers :</h3>
                    <ul class="mc-spaces">
                        <?php foreach ($spaces as $space): ?>
                            <li><span class="mc-space-icon" aria-hidden="true"><?= $space['icon'] ?></span> <?= htmlspecialchars($space['text']) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <footer class="mc-badges">
                <span class="mc-badges-label">Encadrement professionnel</span>
                <span>🎓 BAFA</span>
                <span>👶 CAP Petite Enfance</span>
                <span>🛡️ Assurance RC Professionnelle</span>
            </footer>
        </article>

        <div class="mc-offer-grid mc-offer-grid-2">
            <article class="mc-offer mc-offer-teal">
                <div class="mc-offer-head">
                    <h3>Le coin cosy</h3>
                    <p class="mc-price">+ 250 €</p>
                </div>
                <div class="mc-offer-body">
                    <p>Un espace extérieur chaleureux et soigneusement aménagé pour permettre aux enfants de profiter pleinement des beaux jours et du lieu de réception.</p>
                    <p>Deux tipis, tapis et coussins créent un espace confortable qui s’intègre naturellement à votre décoration.</p>
                    <p>Les enfants peuvent profiter de jeux d’extérieur, jeux d’adresse en bois et bulles, dans une ambiance ludique et conviviale adaptée aux différents âges.</p>
                </div>
            </article>
            <article class="mc-offer mc-offer-violet">
                <div class="mc-offer-head">
                    <h3>L’Instant Bulles</h3>
                    <p class="mc-price">+ 290 €</p>
                    <p class="mc-when">30 minutes pendant le vin d’honneur ou l’accueil de vos invités</p>
                </div>
                <div class="mc-offer-body">
                    <p>Une parenthèse visuelle et poétique où les bulles prennent vie sous toutes leurs formes : bulles géantes, pluie de bulles, bulles de fumée et effets surprenants.</p>
                    <p>Une animation participative qui rassemble petits et grands autour d’un moment suspendu, léger et féérique.</p>
                </div>
            </article>
        </div>

        <div class="mc-prestige">
            <p class="mc-prestige-label">✨ Formule Prestige</p>
            <p class="mc-prestige-price">1 250 €</p>
            <p>Pour vivre l’expérience complète :</p>
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

<section class="section mc-faq">
    <div class="container mc-narrow">
        <div class="section-heading mc-center">
            <h2><span class="brush brush-violet">Questions fréquentes</span></h2>
        </div>
        <?php foreach ($faq as $item): ?>
            <details class="faq-item">
                <summary><?= htmlspecialchars($item['question']) ?></summary>
                <?php foreach ($item['answer'] as $paragraph): ?>
                    <p><?= htmlspecialchars($paragraph) ?></p>
                <?php endforeach; ?>
            </details>
        <?php endforeach; ?>
    </div>
</section>

<section class="section mc-cta">
    <div class="container mc-narrow mc-center">
        <a class="btn mc-cta-btn" href="<?= url('/contact') ?>">💗 Demander mon devis</a>
        <p class="mc-phone"><a href="tel:+33783659843">📞 <?= htmlspecialchars($phone) ?></a></p>
    </div>
</section>

<?php
$galleryFolder = 'mini-club';
$galleryPreview = 1;
require base_path('app/Views/partials/gallery.php');
?>
