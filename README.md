

# **Certify Easy - Plateforme de Gestion des Inscriptions aux Examens de Langues**

Certify Easy est une solution digitale complète pour simplifier et optimiser la gestion des inscriptions, paiements, et examens de langues. Elle propose une interface utilisateur intuitive et des outils administratifs puissants adaptés aux besoins des candidats et des administrateurs.

---

## **Table des Matières**
1. [Description](#description)  
2. [Caractéristiques](#caractéristiques)  
3. [Technologies Utilisées](#technologies-utilisées)  
4. [Prérequis](#prérequis)  
5. [Installation](#installation)  
6. [Configuration](#configuration)  
7. [Migration et Seeders](#migration-et-seeders)  
8. [Fonctionnalités](#fonctionnalités)  
9. [Commandes Utiles](#commandes-utiles)  
10. [Structure du Projet](#structure-du-projet)  
11. [Contributeurs](#contributeurs)

---

## **Description**

Certify Easy simplifie la gestion des examens pour les institutions éducatives.  
La plateforme offre :  
- **Tableau de bord candidat :** Inscription aux examens, gestion des informations personnelles, suivi des paiements.  
- **Tableau de bord administrateur :** Gestion des examens, suivi des paiements, génération de rapports, supervision des candidats.  

---

## **Caractéristiques**

### **Pour les Administrateurs :**
- Gestion complète des examens.  
- Suivi des paiements et inscriptions.  
- Statistiques via graphiques interactifs.  
- Rapports PDF.  

### **Pour les Candidats :**
- Inscription simplifiée.  
- Paiement sécurisé en ligne.  
- Gestion des informations personnelles.  

---

## **Technologies Utilisées**

- **Backend :** PHP 8 avec CodeIgniter 4.  
- **Frontend :** HTML5, CSS3, Bootstrap 5, JavaScript, et Ajax.  
- **Graphiques :** Chart.js.  
- **PDF :** Dompdf.  
- **Base de données :** MySQL.  
- **Versioning :** Git et GitHub.  

---

## **Prérequis**

Avant de démarrer :  
- **PHP** 8.0 ou supérieur.  
- **Composer**.  
- **MySQL** 5.7 ou supérieur.  

---

## **Installation**

1. **Cloner le dépôt :**  
   ```bash
   git clone https://github.com/MohamedOuijjane/PlatformInscription.git
   cd PlatformInscription
   git checkout master
   ```

2. **Installer les dépendances PHP avec Composer :**  
   ```bash
   composer install
   ```

3. **Installer Dompdf pour les PDF dynamiques :**  
   ```bash
   composer require dompdf/dompdf
   ```

4. **Configurer l'environnement :**  
   - Renommez le fichier `.env.example` en `.env`.  
   - Modifiez cette ligne pour passer en mode production :  
     ```plaintext
     CI_ENVIRONMENT = production
     ```

5. **Exécuter les migrations :**  
   ```bash
   php spark migrate
   ```

6. **Lancer le serveur de développement :**  
   ```bash
   php spark serve
   ```
   Accédez à l'application :  
   [http://localhost:8080](http://localhost:8080)

---

## **Configuration**

Assurez-vous que votre base de données MySQL est correctement configurée dans le fichier `.env` :  
```plaintext
database.default.hostname = localhost
database.default.database = votre_base_de_données
database.default.username = votre_utilisateur
database.default.password = votre_mot_de_passe
database.default.DBDriver = MySQLi
```

---

## **Migration et Seeders**

- **Créer une migration :**  
  ```bash
  php spark make:migration NomMigration
  ```

- **Exécuter les migrations :**  
  ```bash
  php spark migrate
  ```

- **Rollback des migrations :**  
  ```bash
  php spark migrate:rollback
  ```

---

## **Fonctionnalités**

### **Administrateurs :**
- Gestion des examens (création, modification, suppression).  
- Suivi des paiements et des inscriptions.  
- Statistiques et rapports en PDF.  

### **Candidats :**
- Inscription aux examens disponibles.  
- Paiement sécurisé en ligne.  
- Gestion des informations personnelles.  

---

## **Commandes Utiles**

- **Lancer le serveur de développement :**  
  ```bash
  php spark serve
  ```
- **Générer des PDF :**  
  ```bash
  composer require dompdf/dompdf
  ```

---

## **Structure du Projet**

```plaintext
PlatformInscription/
├── app/            # Contrôleurs, modèles, et vues
├── public/         # Fichiers accessibles publiquement
├── writable/       # Fichiers dynamiques, journaux, cache
├── database/       # Migrations et seeders
├── vendor/         # Dépendances installées par Composer
└── .env            # Configuration d'environnement
```

---

## **Contributeurs**

Développé par :  
- **Meskaoui Yassine**  
- **Mohammed Ouijjane**

---

## **Licence**

Ce projet est sous licence MIT. Consultez le fichier `LICENSE` pour plus d'informations.


