<?php

return [
    'brand' => [
        'name' => 'Anaïs Paillettes & Co',
        'tagline' => 'Maquillage artistique, bulles enchantées et animations pour anniversaires, mariages, festivals et entreprises.',
        'phone' => '07 83 65 98 43',
        'email' => 'anais.paillettes@gmail.com',
        'facebook' => 'Anais Redouane',
        'instagram' => 'anais paillettes',
        'location' => 'Charente et alentours',
    ],
    'navigation' => [
        ['label' => 'Accueil', 'url' => '/'],
        ['label' => 'Mariages & Fêtes', 'url' => '/mariages-fetes', 'intro' => 'Des animations pour partager de beaux moments lors de vos fêtes et mariages.', 'services' => ['mini-club', 'maquillage-artistique', 'bulles-enchantees']],
        ['label' => 'Anniversaires', 'url' => '/anniversaires', 'intro' => 'Composez un anniversaire autour du maquillage, des bulles et des jeux.', 'services' => ['maquillage-artistique', 'bulles-enchantees']],
        ['label' => 'Bulles & Magie', 'url' => '/bulles-magie', 'intro' => 'Un univers de bulles et de surprises pour émerveiller petits et grands.', 'services' => ['bulles-enchantees']],
        ['label' => 'Maquillage & Bar à paillettes', 'url' => '/maquillage-bar-a-paillettes', 'intro' => 'Couleurs et paillettes pour accompagner vos événements.', 'services' => ['maquillage-artistique']],
        ['label' => 'Kermesse & Carnaval', 'url' => '/kermesse-carnaval', 'intro' => 'Découvrez les animations à associer pour votre kermesse ou votre carnaval.', 'children' => [
            ['id' => 'pack-fiesta', 'label' => 'Pack Fiesta'],
            ['id' => 'jeux-gonflables', 'label' => 'Jeux gonflables'],
            ['id' => 'maquillage', 'label' => 'Maquillage'],
            ['id' => 'bulles', 'label' => 'Bulles'],
            ['id' => 'granite', 'label' => 'Granité'],
            ['id' => 'mascotte', 'label' => 'Mascotte'],
        ]],
        ['label' => 'Grands jeux & Challenges', 'url' => '/grands-jeux-challenges', 'intro' => 'Choisissez votre animation pour réunir les participants autour de défis et de jeux.', 'children' => [
            ['id' => 'archery-game', 'label' => 'Archery Game'],
            ['id' => 'nerf', 'label' => 'Nerf'],
            ['id' => 'pack-olympiades', 'label' => 'Pack Olympiades'],
        ]],
        ['label' => 'Contact & Devis', 'url' => '/contact'],
    ],
    'hero' => [
        'title' => 'Des animations féeriques pour petits et grands',
        'subtitle' => 'Un site vitrine inspiré d\'une structure de loisirs événementiels : une page d\'accueil dynamique, des offres mises en avant, des blocs visuels et un contact immédiat.',
        'cta_primary' => ['label' => 'Découvrir les prestations', 'url' => '/prestations'],
        'cta_secondary' => ['label' => 'Demander un devis', 'url' => '/contact'],
    ],
    'services' => [
        [
            'slug' => 'maquillage-artistique',
            'title' => 'Maquillage artistique',
            'short' => 'Couleurs, paillettes et sourires garantis.',
            'description' => 'Maquillages enfants, thèmes personnalisés, formule simple ou duo pour les gros événements.',
            'highlights' => [
                'Environ 20 maquillages / heure',
                'Formule duo jusqu\'à 45 enfants / heure',
                'Matériel hypoallergénique et normes pro',
            ],
        ],
        [
            'slug' => 'bulles-enchantees',
            'title' => 'Bulles enchantées',
            'short' => 'Bulles géantes, feu, fumée et close-up.',
            'description' => 'Des prestations visuelles et interactives pour créer l\'effet wow pendant vos fêtes et événements publics.',
            'highlights' => [
                'Spectacle jeune public',
                'Déambulation et close-up',
                'Atelier bulles et défis',
            ],
        ],
        [
            'slug' => 'mini-club',
            'title' => 'Mini club',
            'short' => 'Une célébration sereine pour les parents.',
            'description' => 'Coins jeux, animations au choix, accompagnement au repas et au coucher pour les événements familiaux.',
            'highlights' => [
                'Formule Sérénité jusqu\'à 15 enfants',
                'Formule Prestige jusqu\'à 30 enfants',
                'Options jeux, film, escape game, bar à paillettes',
            ],
        ],
    ],
    'stats' => [
        ['number' => '3', 'label' => 'Univers principaux'],
        ['number' => '100%', 'label' => 'Prestations sur mesure'],
        ['number' => 'Charente', 'label' => 'Zone d\'intervention'],
        ['number' => '7j/7', 'label' => 'Réponse devis'],
    ],
    'seo' => [
        'default_title' => 'Anaïs Paillettes & Co',
        'meta_description' => 'Site vitrine MVC en PHP orienté objet pour une activité événementielle : maquillage artistique, bulles enchantées et mini club.',
    ],
];
