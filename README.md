# Anaïs Paillettes & Co - Site PHP MVC

Projet vitrine développé en PHP orienté objet avec une architecture MVC légère.

## Arborescence

- `index.php` : front controller
- `.htaccess` : redirection vers le front controller
- `app/Core` : coeur MVC (router, controller, view, autoloader)
- `app/Controllers` : contrôleurs HTTP
- `app/Models` : modèles métier
- `app/Views` : vues PHP
- `config/site.php` : configuration éditable du contenu du site
- `public/assets` : CSS, JS, images
- `build.php` : génération du site en HTML statique dans `_site/`

## Mise en ligne

Le site est publié sur GitHub Pages. À chaque `git push` sur `main`, le workflow
`.github/workflows/pages.yml` lance `php build.php` et publie le dossier `_site/`.

Pour générer la version statique en local :

```bash
BASE_URL=/nom-du-depot php build.php
```

Les formulaires ouvrent la messagerie du visiteur (lien `mailto:`), ils n'ont pas besoin de serveur.

## Galeries photo

Les photos déposées dans `public/assets/img/galerie/<page>/` (jpg, png, webp) s'affichent
automatiquement en bas de la page, par ordre alphabétique.

Les fichiers `exemple-*.jpg` de `galerie/anniversaires/` et `galerie/mini-club/` sont des photos d'illustration
libres de droits (CC0, rawpixel.com) à remplacer par les vraies photos d'Anaïs.

## Local

Avec PHP installé :

```bash
php -S localhost:8000
```

Puis ouvrez `http://localhost:8000`.

## Evolutions possibles

- Connecter une base MySQL
- Créer un back-office sécurisé
- Ajouter des pages SEO par prestation
- Ajouter un système d'avis clients
