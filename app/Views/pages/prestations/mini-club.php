<?php
$phone = $site['brand']['phone'];
$universes = [
    ['icon' => '🎨', 'title' => 'Créativité & imagination', 'text' => 'Maquillage artistique professionnel, activités manuelles, pâte à modeler, perles et coloriages.'],
    ['icon' => '🧸', 'title' => 'Jeux & découvertes', 'text' => 'Lego®, petites voitures, poupées, peluches, puzzles, livres et jeux de société.'],
    ['icon' => '🎉', 'title' => 'Jeux collectifs', 'text' => 'Des animations viennent ponctuer la journée pour créer une véritable dynamique de groupe et permettre aux enfants de partager des moments ensemble.'],
    ['icon' => '🖼️', 'title' => 'Un souvenir pour les mariés', 'text' => 'Les enfants participent à la création d’une toile collective à offrir aux mariés, réalisée spécialement pour eux au cours de la soirée.'],
    ['icon' => '🌙', 'title' => 'Retour au calme', 'text' => 'Lorsque les plus petits commencent à fatiguer, place aux activités calmes et, selon les besoins, à un accompagnement vers le coucher.'],
];
$timeline = [
    ['icon' => '🥂', 'title' => 'Pendant le vin d’honneur', 'text' => 'Maquillage artistique, paillettes, bulles et animations extérieures peuvent accueillir les enfants dès le début des festivités.'],
    ['icon' => '🍽️', 'title' => 'Pendant le repas', 'text' => 'Le Mini Club prend le relais avec jeux, activités créatives, temps collectifs et accompagnement pendant le repas.'],
    ['icon' => '🌙', 'title' => 'Pendant la soirée', 'text' => 'Les activités deviennent progressivement plus calmes. Selon les besoins, Anaïs peut également accompagner les plus jeunes au moment du coucher pendant que leurs parents poursuivent la soirée.'],
];
$offers = [
    ['title' => 'Mini Club', 'price' => '750 €', 'when' => 'De 18 h à minuit', 'items' => ['Animation et accompagnement au repas et au coucher', 'Maquillage professionnel', 'Activités créatives et jeux', 'Livres, peluches et jeux de société']],
    ['title' => 'Option Coin extérieur', 'price' => '+ 250 €', 'when' => 'Lorsque le lieu le permet', 'items' => ['2 tipis et petite table', 'Tapis et coussins', 'Jeux d’extérieur et bulles', 'Coloriages, jeux de société et jeux en bois']],
    ['title' => 'L’Instant Bulles', 'price' => '+ 290 €', 'when' => '30 minutes pendant le vin d’honneur ou la cérémonie laïque', 'items' => ['Bulles géantes', 'Filets de bulles', 'Bulles de fumée et de feu', 'Animation poétique et participative']],
];
?>
<section class="page-banner page-banner-center mc-hero">
    <div class="container">
        <span class="eyebrow">Mariages</span>
        <h1>Mini Club</h1>
        <p class="mc-tagline">Une journée magique pour les enfants, un mariage serein pour les parents</p>
    </div>
</section>

<section class="section mc-intro">
    <div class="container mc-narrow">
        <p class="mc-lead">De La Rochelle à Royan, en passant par Saintes, Angoulême ou l’Île de Ré, Anaïs se déplace directement sur votre lieu de réception pour créer un véritable Mini Club éphémère dédié aux enfants.</p>
        <p>Pendant que vous et vos invités profitez pleinement de cette journée unique, les plus jeunes vivent eux aussi leur propre fête : jeux, découvertes, activités créatives, maquillage, moments de complicité et petites attentions rythment leur journée.</p>
        <p class="mc-goal"><strong>L’objectif :</strong> des enfants heureux, occupés et accompagnés, et des parents qui profitent pleinement du mariage l’esprit léger.</p>
    </div>
</section>

<section class="section mc-why">
    <div class="container split-grid">
        <div>
            <h2><span class="brush">Pourquoi prévoir une animation pour les enfants&nbsp;?</span></h2>
            <p>Un mariage est une journée merveilleuse, mais souvent très longue pour les plus jeunes.</p>
            <p>Vin d’honneur, repas, discours, soirée… leur rythme n’est pas toujours celui des adultes.</p>
            <p>Le Mini Club leur offre donc un espace spécialement pensé pour eux, avec plusieurs univers de jeux et d’activités adaptés aux différents âges.</p>
        </div>
        <div class="info-panel">
            <p>Anaïs accompagne les enfants pendant les différents temps de la réception et prévoit également des moments plus calmes lorsque la fatigue commence à se faire sentir.</p>
            <p>Les parents peuvent ainsi profiter de la fête tout en sachant leurs enfants accompagnés par une <strong>professionnelle expérimentée de l’animation et de la petite enfance</strong>.</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading mc-center">
            <h2><span class="brush brush-teal">Tout un univers rien que pour eux</span></h2>
            <p>Selon la formule choisie et l’âge des enfants :</p>
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
        <h2><span class="brush brush-teal">Un coin extérieur au cœur de votre réception</span></h2>
        <p>Lorsque le lieu le permet, un coin extérieur ludique peut également être installé.</p>
        <p>Pensé dans un esprit champêtre et élégant, il s’intègre harmonieusement à l’univers de votre mariage.</p>
        <p>Les enfants y retrouvent notamment des jeux d’extérieur, des bulles et différentes activités adaptées à plusieurs âges.</p>
        <p class="mc-goal">Un véritable petit univers rien que pour eux, sans dénaturer l’esthétique de votre réception.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading mc-center">
            <h2><span class="brush brush-violet">Du vin d’honneur jusqu’à la soirée</span></h2>
            <p>Chaque mariage est différent. L’organisation du Mini Club s’adapte donc au déroulement de votre journée.</p>
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
            <h2><span class="brush">Une prestation entièrement clé en main</span></h2>
            <p>Anaïs vient directement sur votre lieu de réception avec le matériel nécessaire à l’installation du Mini Club et aux différentes activités.</p>
            <p class="mc-note">Pour les groupes importants, à partir de plus de 15 enfants, une animatrice supplémentaire peut être prévue afin de conserver un encadrement adapté.</p>
        </div>
        <div class="info-panel">
            <h3>La prestation est adaptée :</h3>
            <ul class="check-list">
                <li>au nombre d’enfants et à leurs âges ;</li>
                <li>à votre lieu de réception ;</li>
                <li>aux espaces intérieurs et extérieurs disponibles ;</li>
                <li>aux horaires et au déroulement de votre mariage ;</li>
                <li>aux besoins particuliers de votre événement.</li>
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
                <span>Mini Club</span> <span aria-hidden="true">+</span>
                <span>Coin extérieur</span> <span aria-hidden="true">+</span>
                <span>L’Instant Bulles</span>
            </p>
        </div>
        <p class="mc-extra">Heure supplémentaire : <strong>80 €</strong></p>
    </div>
</section>

<section class="section mc-cta">
    <div class="container mc-narrow mc-center">
        <h2><span class="brush">Imaginez le Mini Club de votre mariage</span></h2>
        <p>Chaque mariage est unique. Ensemble, nous imaginons un Mini Club adapté à votre réception, à votre lieu et aux enfants qui seront présents.</p>
        <a class="btn mc-cta-btn" href="<?= url('/contact') ?>">💗 Demander mon devis</a>
        <p class="mc-phone"><a href="tel:+33783659843">📞 <?= htmlspecialchars($phone) ?></a></p>
    </div>
</section>

<?php
$galleryFolder = 'mini-club';
$galleryPreview = 1;
require base_path('app/Views/partials/gallery.php');
?>
