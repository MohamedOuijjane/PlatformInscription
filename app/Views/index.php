<?= $this->extend('layouts/mainlayouts') ?> 
<!-- Hérite de la mise en page principale définie dans 'layouts/mainlayouts' -->

<?= $this->section('title') ?> 
Home - Passerelle des langues
<?= $this->endSection() ?> 


<?= $this->section('content') ?> 

<style>
    /* Styles spécifiques à la page d'accueil */

    /* Carrousel */
    .carousel {
        max-width: 100%; /* Largeur maximale définie pour s'adapter à tout écran */
        margin: 10px auto; /* Centrage horizontal avec un petit espacement vertical */
        border-radius: 10px; /* Coins arrondis */
        background-color: #0097a7; /* Couleur de fond */
        height: 100%; /* Hauteur complète */
    }

    .carousel-inner img {
        width: 100%; /* Images ajustées à la largeur du conteneur */
        border-radius: 10px; /* Coins arrondis pour les images */
        height: 500px; /* Hauteur fixe */
        object-fit: cover; /* Images ajustées sans distorsion */
    }

    .carousel-caption {
        position: absolute; /* Positionnement en couches */
        top: 50%; /* Centrage vertical */
        left: 50%; /* Centrage horizontal */
        transform: translate(-50%, -50%); /* Alignement parfait au centre */
        color: #fff; /* Texte en blanc */
        z-index: 10; /* Priorité d'affichage */
        text-align: center; /* Texte centré */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #6c757d; /* Couleur de fond pour les contrôles */
        width: 50px; /* Largeur des icônes */
        height: 92px; /* Hauteur des icônes */
    }

    /* Section des diplômes */
    .language-diplomas {
        padding: 50px; /* Espacement interne */
        background-color: #e0e0e0; /* Couleur de fond gris clair */
        text-align: left; /* Texte aligné à gauche */
        border-radius: 10px; /* Coins arrondis */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Ombre subtile */
        width: 100%; /* Largeur complète */
    }

    .intro-section h1 {
        font-size: 2.5rem; /* Taille de la police pour le titre principal */
        margin-bottom: 20px; /* Espacement sous le titre */
        color: #333; /* Couleur du texte */
    }

    .highlight {
        color: #00bcd4; /* Couleur en bleu clair pour mettre en avant */
        font-weight: bold; /* Texte en gras */
        margin-bottom: 20px; /* Espacement sous l'élément */
    }

    .levels {
        list-style-type: none; /* Suppression des puces */
        padding: 0; /* Suppression du padding */
    }

    .levels li {
        padding-left: 20px; /* Espacement à gauche */
        margin-bottom: 5px; /* Espacement entre les éléments */
        position: relative; /* Nécessaire pour l'icône personnalisée */
    }

    .levels li::before {
        content: "▶"; /* Ajout d'une icône flèche avant chaque élément */
        color: #00bcd4; /* Couleur bleue pour la flèche */
        position: absolute; /* Positionnement absolu */
        left: 0; /* Alignement à gauche */
        top: 0; /* Alignement vertical au début */
    }

    /* Cartes des diplômes */
    .diploma-cards {
        display: flex; /* Utilisation de Flexbox pour l'agencement */
        flex-wrap: wrap; /* Permet le retour à la ligne pour les éléments */
        gap: 20px; /* Espacement entre les cartes */
        justify-content: space-around; /* Distribution uniforme */
        margin-top: 30px; /* Espacement supérieur */
    }

    .card {
        background-color: #f1f1f1; /* Fond gris clair */
        border-radius: 8px; /* Coins arrondis */
        padding: 20px; /* Espacement interne */
        flex: 1; /* Distribution flexible */
        max-width: 23%; /* Largeur maximale des cartes */
        text-align: center; /* Texte centré */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre légère */
    }

    .badge {
        background-color: #ffcc00; /* Couleur jaune pour le badge */
        color: #fff; /* Texte en blanc */
        font-weight: bold; /* Texte en gras */
        padding: 5px 10px; /* Espacement interne */
        border-radius: 4px; /* Coins arrondis */
        margin-bottom: 10px; /* Espacement sous le badge */
        display: inline-block; /* Affichage en ligne */
    }

    h4 {
        margin-bottom: 15px; /* Espacement inférieur pour les titres */
        color: #333; /* Couleur du texte */
    }

    p {
        font-size: 14px; /* Taille de la police */
        color: #555; /* Couleur gris foncé */
        margin-bottom: 20px; /* Espacement inférieur */
    }

    .info-btn {
        background-color: #00bcd4; /* Couleur de fond bleu clair */
        color: #fff; /* Texte en blanc */
        padding: 10px 20px; /* Espacement interne */
        border-radius: 5px; /* Coins arrondis */
        text-decoration: none; /* Suppression du soulignement */
        font-weight: bold; /* Texte en gras */
    }

    .info-btn:hover {
        background-color: #0097a7; /* Changement de couleur au survol */
    }

    /* Section "Mot du Président" */
    .president-section {
        width: 100%; /* Largeur complète */
        background-color: #0000001f; /* Couleur de fond avec transparence */
        color: #212529db; /* Couleur du texte */
        padding: 60px 30px; /* Espacement interne */
        text-align: center; /* Texte centré */
        border-radius: 25px; /* Coins arrondis */
        margin-top: 20px; /* Espacement supérieur */
        margin-bottom: 20px; /* Espacement inférieur */
        opacity: 1.5; /* Transparence */
    }

    .president-section h2 {
        font-size: 2.5rem; /* Taille du titre */
        font-weight: 700; /* Texte en gras */
        margin-bottom: 20px; /* Espacement inférieur */
    }

    .divider {
        width: 100px; /* Largeur de la ligne de séparation */
        height: 5px; /* Hauteur de la ligne */
        background-color: #00bcd4; /* Couleur bleu clair */
        margin: 20px auto 40px; /* Centrage avec espacement */
    }

    .president-section p {
        font-size: 0.9rem; /* Taille de la police */
        line-height: 1.8; /* Hauteur de ligne */
        max-width: 950px; /* Largeur maximale du texte */
        margin: 0 auto; /* Centrage horizontal */
        color: #000; /* Couleur du texte */
    }
</style>

<!-- Début de la structure HTML -->
<div class="container-fluid">
    <!-- Carrousel Bootstrap -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicateurs du carrousel -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <!-- Images du carrousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/c2.jpg" class="d-block" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="images/c1.jpg" class="d-block" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="images/c3.jpg" class="d-block" alt="Image 3">
            </div>
        </div>
        <!-- Boutons de contrôle du carrousel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Section des diplômes -->
    <section class="language-diplomas">
        <div class="container">
            <!-- Introduction sur les diplômes -->
            <div class="intro-section">
                <h1>Le diplôme de langue allemande (Passerelle des langues)</h1>
                <h3 class="highlight">Les Langues Changent La Vie</h3>
                <p>Un système d'examen à plusieurs niveaux pour l'allemand comme langue étrangère (moderne). Les diplômes sont reconnus internationalement.</p>
                <p>Les diplômes sont offerts à différents niveaux :</p>
                <!-- Liste des niveaux -->
                <ul class="levels">
                    <li>Zertifikat Deutsch A1 (niveau élémentaire 1)</li>
                    <li>Zertifikat Deutsch A2 (niveau élémentaire 2)</li>
                    <li>Zertifikat Deutsch B1 (niveau élémentaire 3)</li>
                    <li>Zertifikat Deutsch B2 (niveau moyen)</li>
                </ul>
            </div>
            <!-- Cartes des diplômes -->
            <div class="diploma-cards">
                <div class="card">
                    <div class="badge">A1</div>
                    <h4>Zerifikat A1</h4>
                    <p>L'examen  ZERTIFIKAT A1 est semi-modulaire. Il se compose d'un module écrit et d'un module oral.</p>
                </div>
                <div class="card">
                    <div class="badge">A2</div>
                    <h4>Zerifikat A2</h4>
                    <p>L'examen  ZERTIFIKAT A2 est semi-modulaire. Il se compose d'un module écrit et d'un module oral.</p>
                </div>
                <div class="card">
                    <div class="badge">B1</div>
                    <h4>Zerifikat B1</h4>
                    <p>L'examen ZB1 est modulaire et se compose de quatre épreuves indépendantes l'une de l'autre. L'épreuve orale se passe en binôme.</p>
                </div>
                <div class="card">
                    <div class="badge">B2</div>
                    <h4>Zerifikat B2</h4>
                    <p>L'examen  ZERTIFIKAT B2 est semi-modulaire. Il se compose d'un module écrit et d'un module oral.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section "Mot du Président" -->
    <div class="president-section">
        <h2>Mot Du Président</h2>
        <div class="divider"></div>
        Vous vous êtes consacrés à l'apprentissage de l'allemand pour atteindre un certain but. Apprenez davantage en sachant que personne ne réussit sans effort et que ceux, qui réussissent dans leur vie, doivent leur succès à leur persévérance.
        En 2001, Le Centre est devenu un centre d’examen d'allemand agréé par le bureau central du « Diplôme autrichien de langue allemande ». Il organise les examens et délivre les diplômes A1, A2, B1, B2, C1 et C2. Le professeur Dr. Rachid Jai-Mansouri est le président de la commission des examens au Maroc.
    </div>
</div>
<?= $this->endSection() ?> 
