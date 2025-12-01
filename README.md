🌌 Space Tourism – Projet Laravel

Un projet complet développé dans le cadre de la formation Développeur Web & Web Mobile, inspiré du challenge Space Tourism (Frontend Mentor), et entièrement reconstruit en Laravel, avec un front dynamique, un système admin CRUD, et une gestion d’images responsive (portrait / landscape).

📌 Table des matières

Présentation générale

Fonctionnalités

Architecture du projet

Technologies utilisées

Installation

Structure de la base de données

Captures (optionnel)

Auteur

🌌 1. Présentation générale

Space Tourism est un site permettant d’explorer :

différentes destinations spatiales,

les membres du crew,

les différentes technologies utilisées dans les missions spatiales.

Le front du site est entièrement responsive et fidèle au design original Frontend Mentor, mais alimenté par un système dynamique créé en Laravel.

Le projet inclut aussi un back-office complet pour gérer les contenus du site :

Destinations

Crew

Technologies

Chaque ressource peut être ajoutée, modifiée, supprimée, avec gestion des images.

🧩 2. Fonctionnalités
🎨 Front Office

Page Home (responsive)

Page Destinations : navigation par onglets, images dynamiques, distance + durée

Page Crew : navigation par “dots”, portraits du personnel

Page Technology : boutons numérotés, images landscape (mobile) et portrait (desktop)

🛠 Back Office (Administration)

CRUD complet pour :

✔ Destinations
✔ Crew
✔ Technologies

🗂️ 3. Architecture du projet
app/
    Http/
        Controllers/
    Models/

resources/
    views/
        admin/
        components/
        front/

public/
    images/
        crew/
        destination/
        technology/

routes/
    web.php

database/
    migrations/

🛠 4. Technologies utilisées

Laravel 10+

PHP 8+

Blade / Blade Components

Tailwind CSS

MySQL

Laravel Vite

Git & GitHub

⚙️ 5. Installation du projet
1️⃣ Cloner le dépôt
git clone https://github.com/Abdoulaye75010/space-tourism.git
cd space-tourism

2️⃣ Installer les dépendances
composer install
npm install
npm run build

3️⃣ Configurer l’environnement
cp .env.example .env


Modifier :

DB_DATABASE=space_tourism
DB_USERNAME=root
DB_PASSWORD=

4️⃣ Générer la clé
php artisan key:generate

5️⃣ Exécuter les migrations
php artisan migrate

6️⃣ Lancer le serveur
php artisan serve

🗄️ 6. Structure de la base de données
📌 destinations

id

name

description

distance

duration

image

📌 crews

id

name

role

biography

image

📌 technologies

id

name

description

image_landscape

image_portrait

👨‍🚀 8. Auteur

Nom : Abdoulaye DIAGANA
Formation : Développeur Web & Web Mobile
Projet réalisé en novembre–décembre 2024
GitHub : https://github.com/Abdoulaye75010