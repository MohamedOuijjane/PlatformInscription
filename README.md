Certify Easy
Plateforme de Gestion des Inscriptions aux Examens de Langues

Certify Easy est une solution digitale complète pour simplifier et optimiser la gestion des inscriptions, paiements, et examens de langues. Elle propose une interface utilisateur intuitive et des outils administratifs puissants adaptés aux besoins des candidats et des administrateurs.

Table des Matières
Description
Caractéristiques
Technologies Utilisées
Prérequis
Installation
Configuration
Migration et Seeders
Fonctionnalités
Commandes Utiles
Structure du Projet
Contributeurs
Description
Dans un monde où la maîtrise des langues est essentielle, Certify Easy simplifie la gestion des examens pour les institutions éducatives.
La plateforme offre :

Tableau de bord candidat : Inscription aux examens, gestion des informations personnelles, suivi des paiements.
Tableau de bord administrateur : Gestion des examens, suivi des paiements, génération de rapports, supervision des candidats.
Grâce à des technologies modernes, Certify Easy garantit une expérience utilisateur fluide, sécurisée, et performante.

Caractéristiques
Pour les Administrateurs :
Création, modification et suppression des examens.
Gestion des inscriptions et paiements des candidats.
Suivi des statistiques via des graphiques interactifs.
Génération de rapports PDF.
Notifications en temps réel.
Pour les Candidats :
Mise à jour des informations personnelles.
Inscription simplifiée aux examens disponibles.
Paiement en ligne avec suivi du statut.
Technologies Utilisées
Backend : PHP 8 avec CodeIgniter 4.
Frontend : HTML5, CSS3, Bootstrap 5, JavaScript, et Ajax.
Graphiques : Chart.js.
Génération PDF : Dompdf.
Base de Données : MySQL.
Versioning : Git et GitHub.
Prérequis
Avant de démarrer, assurez-vous d'avoir :

PHP 8.0 ou supérieur.
Composer (gestionnaire de dépendances PHP).
MySQL 5.7 ou supérieur.
Serveur Apache/Nginx.
Installation
Cloner le dépôt Git :

bash
Copier le code
git clone https://github.com/MohamedOuijjane/PlatformInscription.git
cd PlatformInscription
git checkout master
Installer les dépendances PHP avec Composer :

bash
Copier le code
composer install
Installer Dompdf pour les PDF dynamiques :

bash
Copier le code
composer require dompdf/dompdf
Configurer l'environnement :

Renommer le fichier .env.example en .env.
Modifier cette ligne pour passer en mode production :
plaintext
Copier le code
CI_ENVIRONMENT = production
Exécuter les migrations :

bash
Copier le code
php spark migrate
Lancer le serveur de développement :

bash
Copier le code
php spark serve
Accédez à l'application :
http://localhost:8080

Configuration
Assurez-vous que votre base de données MySQL est correctement configurée dans le fichier .env :

plaintext
Copier le code
database.default.hostname = localhost
database.default.database = votre_base_de_données
database.default.username = votre_utilisateur
database.default.password = votre_mot_de_passe
database.default.DBDriver = MySQLi
Migration et Seeders
Créer une migration :

bash
Copier le code
php spark make:migration NomMigration
Exécuter les migrations :

bash
Copier le code
php spark migrate
Rollback des migrations :

bash
Copier le code
php spark migrate:rollback
Fonctionnalités
Administrateurs :
Gestion des examens (ajout, modification, suppression).
Suivi des paiements et des inscriptions.
Statistiques et rapports en PDF.
Candidats :
Inscription aux examens disponibles.
Paiement sécurisé en ligne.
Gestion des informations personnelles.
Commandes Utiles
Lancer le serveur de développement :
bash
Copier le code
php spark serve
Générer des PDF :
bash
Copier le code
composer require dompdf/dompdf
Structure du Projet
plaintext
Copier le code
PlatformInscription/
├── app/            # Contrôleurs, modèles, et vues
├── public/         # Fichiers accessibles publiquement
├── writable/       # Fichiers dynamiques, journaux, cache
├── database/       # Migrations et seeders
├── vendor/         # Dépendances installées par Composer
└── .env            # Configuration d'environnement
Contributeurs
Développé par :

Meskaoui Yassine
Mohammed Ouijjane
Licence
Ce projet est sous licence MIT. Consultez le fichier LICENSE pour plus d'informations.
