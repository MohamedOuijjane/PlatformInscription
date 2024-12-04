# Certify Easy - Plateforme de Gestion des Inscriptions aux Examens de Langues

Certify Easy est une solution digitale complète et professionnelle conçue pour simplifier et optimiser la gestion des inscriptions, des paiements et des examens de langues. Cette plateforme offre une interface utilisateur intuitive et des outils d'administration puissants pour répondre aux besoins des candidats et des administrateurs.

---

## Table des Matières
- [Description](#description)
- [Caractéristiques](#caractéristiques)
- [Technologies Utilisées](#technologies-utilisées)
- [Prérequis](#prérequis)
- [Installation](#installation)
- [Configuration](#configuration)
- [Migration et Seeders](#migration-et-seeders)
- [Fonctionnalités](#fonctionnalités)
- [Commandes Utiles](#commandes-utiles)
- [Structure du Projet](#structure-du-projet)


## Description

Dans un monde où la maîtrise des compétences linguistiques est primordiale, Certify Easy facilite la gestion des examens de langues pour les institutions et organismes éducatifs. La plateforme est dotée de deux interfaces principales :
- **Tableau de bord candidat :** Permet aux utilisateurs de s'inscrire à des examens, de gérer leurs informations personnelles et de suivre leurs paiements.
- **Tableau de bord administrateur :** Fournit des outils avancés pour gérer les examens, les paiements, et superviser les candidats.

Certify Easy repose sur des technologies modernes pour offrir une expérience utilisateur fluide, sécurisée et optimisée.

---

## Caractéristiques

- **Gestion des Examens :** Ajout, modification et suppression des examens.
- **Inscription des Candidats :** Interface utilisateur intuitive pour gérer les inscriptions.
- **Paiements :** Suivi des paiements et confirmation des statuts.
- **Rapports :** Génération de rapports statistiques (graphiques interactifs et export en PDF).
- **Notifications en Temps Réel :** Alertes de validation et de suivi.
- **Sécurité des Données :** Architecture robuste pour protéger les informations sensibles.



## Technologies Utilisées

- **Backend :** PHP 8 avec CodeIgniter 4.
- **Frontend :** HTML5, CSS, Bootstrap 5, JavaScript et Ajax.
- **Graphiques :** Chart.js.
- **Génération PDF :** Dompdf.
- **Base de Données :** MySQL.
- **Versioning :** Git et GitHub.

---

## Prérequis

Avant de commencer, assurez-vous d'avoir installé les éléments suivants :
- PHP 8.0 ou supérieur.
- Composer (gestionnaire de dépendances PHP).
- MySQL 5.7 ou supérieur.



---

## Installation

1. Clonez le dépôt Git :
   ```bash
   git clone https://github.com/MohamedOuijjane/PlatformInscription.git
   cd PlatformInscription
   git checkout master// cette commande pour travail dans la branche principal 
Installez les dépendances PHP avec Composer :
composer install
Installez Dompdf pour la génération des PDF :

composer require dompdf/dompdf
Configuration
Renommez le fichier .env.example en .env :

Passez en mode production en modifiant la ligne suivante dans le fichier .env :


CI_ENVIRONMENT = production

Exécutez les migrations pour créer les tables nécessaires :
php spark migrate

Fonctionnalités
Pour les Administrateurs :
Gestion complète des examens (création, édition, suppression).
Gestion des candidats et des paiements.
Suivi des statistiques via des graphiques interactifs.
Pour les Candidats :
Mise à jour des informations personnelles.
Inscription à des examens disponibles.
Paiement en ligne avec suivi du statut.
Commandes Utiles
Développement :
Lancer le serveur de développement :

Accédez à l'application http://localhost/PlatformInscription/public/
Migration et Rollback :
Créer une migration :

php spark make:migration NomMigration
Exécuter les migrations :php spark migrate
pour genere le pdf :composer require dompdf/dompdf
pour que sa ca marche bein il faut inser la base de donnes
Revenir en arrière (rollback) :php spark migrate:rollback
Structure du Projet
app/ : Contient les contrôleurs, modèles et vues.
public/ : Répertoire accessible au public.
writable/ : Fichiers générés dynamiquement, journaux et cache.
database/ : Contient les migrations et seeders.
vendor/ : Dépendances installées par Composer.

Dévelopé par :
[Meskaoui Yassine et Mohammed Ouijjane]

