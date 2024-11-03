<?= $this->extend('layouts/mainlayouts') ?>

<?= $this->section('title') ?>
Page d'Accueil
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<style>
    /* Styles pour les icônes des flèches */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #3498db; /* Couleur des flèches */
        border-radius: 50%; /* Arrondir les bords */
        width: 40px;
        height: 40px;
    }

    /* Arrière-plan de la section de contenu */
    .content-background {
        background-color: #f4f4f9; /* Couleur de fond douce et professionnelle */
        padding: 30px; /* Espacement intérieur pour un look plus aéré */
        border-radius: 10px; /* Arrondir les bords */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Ombre subtile */
        max-width: 1200px; /* Largeur maximale de la section */
        margin: 20px auto; /* Centrer et ajouter un peu d'espace vertical */
    }

    /* Styles pour le carrousel */
    .carousel {
        max-width: 1000px; /* Largeur maximale du carrousel */
        margin: 0 auto; /* Centre le carrousel */
        position: relative;
    }

    .carousel-inner img {
        width: 100%; /* Assure que les images occupent toute la largeur de leur conteneur */
        height: auto; /* Conserve les proportions de l'image */
        min-height: 400px; /* Hauteur minimale pour un affichage uniforme */
        border-radius: 10px; /* Arrondir légèrement les bords des images */
    }

    /* Ajouter une ombre et un texte sur fond semi-transparent */
    .carousel-item::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3); /* Opacité pour le texte */
        z-index: 1;
    }

    .carousel-caption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        color: #fff;
    }

    /* Styles pour les boutons */
    .btn-primary:hover {
        background-color: #1d6f9e;
    }

    .btn-outline-primary:hover {
        background-color: #3498db;
        color: #fff;
    }
    /* president-section */
    .president-section {
        background-color: #2c2c2c; /* Couleur de fond sombre et élégante */
        color: #e0e0e0; /* Couleur de texte gris clair pour un meilleur contraste */
        padding: 60px 30px; /* Espacement généreux pour un contenu aéré */
        text-align: center; /* Centrer le texte */
        border-top: 5px solid #00aaff; /* Bordure décorative en haut */
    }

    .president-section h2 {
        font-size: 2.5rem;
        font-weight: 700; /* Texte en gras pour le titre */
        margin-bottom: 20px;
        color: #ffffff; /* Couleur de texte blanche pour le titre */
    }

    .president-section p {
        font-size: 1rem;
        line-height: 1.8; /* Augmenter l'espacement des lignes pour une meilleure lisibilité */
        max-width: 800px;
        margin: 0 auto; /* Centrer le texte avec une largeur maximale */
    }

    .divider {
        width: 60px;
        height: 5px;
        background-color: #00aaff; /* Couleur de l'élément décoratif */
        margin: 20px auto 40px; /* Espacement autour de l'élément */
    }
</style>

<div class="content-background">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/image1.jpg" class="d-block" alt="Image 1">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Diplôme De Langue Allemande (ÖSD)</h2>
                    <p>Examens et certificats d'allemand reconnus internationalement pour les enfants, les jeunes apprenants et les adultes.</p>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary">Plus d'informations</a>
                        <a href="#" class="btn btn-outline-primary">Les sessions disponibles</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/image2.png" class="d-block" alt="Image 2">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Un Autre Titre</h2>
                    <p>Texte descriptif pour cette image.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/image3.jpg" class="d-block" alt="Image 3">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Autre Titre</h2>
                    <p>Description de l'image ou autre texte pertinent.</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Section "Mot du Président" -->
<div class="president-section">
    <h2>Mot Du Président</h2>
    <div class="divider"></div>
    <p>
        Vous vous êtes consacrés à l'apprentissage de l'allemand pour atteindre un certain but. Apprenez davantage en sachant que personne ne réussit sans effort et que ceux, qui réussissent dans leur vie, doivent leur succès à leur persévérance.
        En 2001, Le Centre ÖSD est devenu un centre d’examen d'allemand agréé par le bureau central du « Diplôme autrichien de langue allemande ». Il organise les examens et délivre les diplômes A1, A2, B1, B2, C1 et C2. Le professeur Dr. Rachid Jai-Mansouri est le président de la commission des examens ÖSD au Maroc.
    </p>
</div>
</div>
<?= $this->endSection() ?>
