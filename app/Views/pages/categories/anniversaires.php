<?php
$phone = $site['brand']['phone'];
$themes = [
    ['icon' => '💜', 'label' => 'K-pop'],
    ['icon' => '💙', 'label' => 'Stitch'],
    ['icon' => '🦄', 'label' => 'Licorne'],
    ['icon' => '🍄', 'label' => 'Mario'],
    ['icon' => '⚽', 'label' => 'Football'],
    ['icon' => '🦖', 'label' => 'Dinosaures'],
    ['icon' => '🦸', 'label' => 'Super-héros'],
    ['icon' => '✨', 'label' => '… ou tout autre univers imaginé ensemble !'],
];
$activities = [
    ['icon' => '🔎', 'title' => 'Chasse au trésor ou Escape Game', 'text' => 'Des énigmes, des indices et une aventure adaptée à l’âge des enfants.'],
    ['icon' => '🫧', 'title' => 'Défis Bulles', 'text' => 'Jeux et challenges autour des bulles pour petits et grands.'],
    ['icon' => '🎨', 'title' => 'Activités manuelles', 'text' => 'Des créations adaptées au thème de l’anniversaire que les enfants pourront réaliser ensemble.'],
    ['icon' => '🧪', 'title' => 'Défis scientifiques', 'text' => 'Des expériences amusantes et accessibles pour découvrir la science en s’amusant.'],
    ['icon' => '🎵', 'title' => 'Boum & jeux musicaux', 'text' => 'Musique, danse, défis et jeux pour faire bouger toute la petite équipe.'],
];
$included = [
    ['icon' => '⏱️', 'label' => '2 heures d’animation'],
    ['icon' => '🎨', 'label' => 'Maquillage professionnel'],
    ['icon' => '🎉', 'label' => '2 animations au choix'],
    ['icon' => '📸', 'label' => 'Fond photo & accessoires'],
    ['icon' => '🎒', 'label' => 'Matériel d’animation fourni'],
];
?>
<section class="page-banner page-banner-center an-hero">
    <div class="container">
        <span class="eyebrow">Anniversaires</span>
        <h1>Anniversaire sur&#8209;mesure</h1>
        <p class="mc-tagline">2 heures d’animation, de rires et de souvenirs !</p>
        <p class="an-hero-text">Offrez à votre enfant un anniversaire entièrement animé autour de son univers préféré.</p>
        <div class="hero-actions">
            <a class="btn" href="#formule">Voir la formule · 180 €</a>
            <a class="btn btn-outline" href="<?= url('/contact') ?>">Demander un devis</a>
        </div>
    </div>
</section>

<section class="section an-themes">
    <div class="container mc-center">
        <h2><span class="brush brush-violet">Son univers préféré</span></h2>
        <ul class="an-chips">
            <?php foreach ($themes as $theme): ?>
                <li><span aria-hidden="true"><?= $theme['icon'] ?></span> <?= htmlspecialchars($theme['label']) ?></li>
            <?php endforeach; ?>
        </ul>
        <p class="an-note">Chaque anniversaire est personnalisé en fonction de l’âge des enfants, de leurs envies et du thème choisi.</p>
    </div>
</section>

<section class="section an-program">
    <div class="container">
        <div class="section-heading mc-center">
            <h2><span class="brush">🎉 2 heures de fête clé en main</span></h2>
            <p>Pendant 2 heures, Anaïs prend en charge l’animation de l’anniversaire. La formule comprend :</p>
        </div>

        <div class="an-combo">
            <div class="an-combo-item">
                <span class="mc-icon" aria-hidden="true">🎨</span>
                <strong>Maquillage professionnel</strong>
            </div>
            <span class="an-combo-plus" aria-hidden="true">+</span>
            <div class="an-combo-item an-combo-item-teal">
                <span class="mc-icon" aria-hidden="true">🎉</span>
                <strong>2 animations au choix</strong>
            </div>
        </div>

        <p class="an-subtitle">parmi plusieurs univers :</p>
        <div class="an-activities">
            <?php foreach ($activities as $activity): ?>
                <article class="an-activity">
                    <span class="an-activity-icon" aria-hidden="true"><?= $activity['icon'] ?></span>
                    <div>
                        <h3><?= htmlspecialchars($activity['title']) ?></h3>
                        <p><?= htmlspecialchars($activity['text']) ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section an-memories">
    <div class="container split-grid">
        <div>
            <h2><span class="brush brush-teal">📸 Des souvenirs de leur journée</span></h2>
            <p>Un fond photo et des accessoires fun sont également installés pour permettre aux enfants de poser, rire et garder de jolis souvenirs de la fête.</p>
            <p>Le matériel nécessaire aux animations est fourni.</p>
        </div>
        <div class="an-deal">
            <p><span aria-hidden="true">🎂</span> Vous préparez le gâteau et les bougies.</p>
            <p><span aria-hidden="true">🎈</span> Anaïs s’occupe de l’animation.</p>
        </div>
    </div>
</section>

<section class="section an-offer" id="formule">
    <div class="container">
        <article class="an-price-card">
            <p class="an-price-label">🩷 La formule</p>
            <h2>Anniversaire sur&#8209;mesure</h2>
            <p class="an-price">180 €</p>
            <p class="an-price-sub"><strong>Jusqu’à 12 enfants</strong><br>puis + 8 € par enfant supplémentaire</p>
            <ul class="an-included">
                <?php foreach ($included as $item): ?>
                    <li><span aria-hidden="true"><?= $item['icon'] ?></span> <?= htmlspecialchars($item['label']) ?></li>
                <?php endforeach; ?>
            </ul>
            <a class="btn mc-cta-btn" href="<?= url('/contact') ?>">💗 Organiser son anniversaire</a>
        </article>
    </div>
</section>

<section class="section mc-cta">
    <div class="container mc-narrow mc-center">
        <h2><span class="brush brush-violet">✨ Son univers. Sa fête. Ses souvenirs.</span></h2>
        <p>Une formule clé en main pour que les enfants profitent pleinement de la fête…<br>et que les parents n’aient plus qu’à savourer le moment.</p>
        <a class="btn mc-cta-btn" href="<?= url('/contact') ?>">💗 Organiser son anniversaire</a>
        <p class="mc-phone"><a href="tel:+33783659843">📞 <?= htmlspecialchars($phone) ?></a></p>
    </div>
</section>

<?php
$galleryFolder = 'anniversaires';
$galleryTitle = 'Les anniversaires en images';
$gallerySubtitle = 'Couleurs, paillettes et éclats de rire : un aperçu de l’ambiance des fêtes.';
$galleryAlt = 'Ambiance d’anniversaire';
require base_path('app/Views/partials/gallery.php');
?>
