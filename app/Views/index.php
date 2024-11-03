<?= $this->extend('layouts/mainlayouts') ?>

<?= $this->section('title') ?>
Page d'Accueil
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<style>
    /* Styles spécifiques à la page d'accueil */

    /* Carrousel */
    .carousel {
        max-width: 1000px;
        margin: 20px auto;
        border-radius: 10px;
    }

    .carousel-inner img {
        width: 100%;
        height: auto;
        min-height: 400px;
        border-radius: 10px;
    }

    .carousel-caption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        z-index: 10;
        text-align: center;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #3498db;
        border-radius: 50%;
        width: 40px;
        height: 40px;
    }

    /* Section des diplômes */
    .language-diplomas {
        padding: 50px;
        background-color: #fff;
        text-align: left;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .intro-section h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: #333;
    }

    .highlight {
        color: #00bcd4;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .levels {
        list-style-type: none;
        padding: 0;
    }

    .levels li {
        padding-left: 20px;
        margin-bottom: 5px;
        position: relative;
    }

    .levels li::before {
        content: "▶";
        color: #00bcd4;
        position: absolute;
        left: 0;
        top: 0;
    }

    /* Cartes des diplômes */
    .diploma-cards {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-around;
        margin-top: 30px;
    }

    .card {
        background-color: #f1f1f1;
        border-radius: 8px;
        padding: 20px;
        flex: 1;
        max-width: 23%;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .badge {
        background-color: #ffcc00;
        color: #fff;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 4px;
        margin-bottom: 10px;
        display: inline-block;
    }

    h4 {
        margin-bottom: 15px;
        color: #333;
    }

    p {
        font-size: 14px;
        color: #555;
        margin-bottom: 20px;
    }

    .info-btn {
        background-color: #00bcd4;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
    }

    .info-btn:hover {
        background-color: #0097a7;
    }

    /* Section "Mot du Président" */
    .president-section {
        background-color: #2c2c2c;
        color: #e0e0e0;
        padding: 60px 30px;
        text-align: center;
        border-top: 5px solid #00aaff;
    }

    .president-section h2 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .divider {
        width: 60px;
        height: 5px;
        background-color: #00aaff;
        margin: 20px auto 40px;
    }

    .president-section p {
        font-size: 1rem;
        line-height: 1.8;
        max-width: 800px;
        margin: 0 auto;
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
    <section class="language-diplomas">
  <div class="container">
    <div class="intro-section">
      <h1>Le diplôme de langue allemande (ÖSD)</h1>
      <h3 class="highlight">Les Langues Changent La Vie</h3>
      <p>
        Un système d'examen à plusieurs niveaux pour l'allemand comme langue étrangère (moderne). Les diplômes ÖSD sont
        reconnus par l'ALTE “Association of Language Testers in Europe”, ce qui lui confère une reconnaissance
        internationale.
      </p>
      <p>Les diplômes sont offerts à différents niveaux :</p>
      <ul class="levels">
        <li>Zertifikat Deutsch A1 (niveau élémentaire 1)</li>
        <li>Zertifikat Deutsch A2 (niveau élémentaire 2)</li>
        <li>Zertifikat Deutsch B1 (niveau élémentaire 3)</li>
        <li>Zertifikat Deutsch B2 (niveau moyen)</li>
      </ul>
    </div>
    <div class="diploma-cards">
      <div class="card">
        <div class="badge">A1</div>
        <h4>Zerifikat A1</h4>
        <p>L'examen ÖSD ZERTIFIKAT A1 est semi-modulaire. Il se compose d'un module écrit (Lire + Écouter + Écrire) et d'un module oral.</p>
        <a href="#" class="info-btn">Plus d'informations</a>
      </div>
      <div class="card">
        <div class="badge">A2</div>
        <h4>Zerifikat A2</h4>
        <p>L'examen ÖSD ZERTIFIKAT A2 est semi-modulaire. Il se compose d'un module écrit (Lire + Écouter + Écrire) et d'un module oral.</p>
        <a href="#" class="info-btn">Plus d'informations</a>
      </div>
      <div class="card">
        <div class="badge">B1</div>
        <h4>Zerifikat B1</h4>
        <p>L'examen ZB1 est modulaire et se compose de quatre épreuves indépendantes l'une de l'autre. L'épreuve orale se passe en binôme.</p>
        <a href="#" class="info-btn">Plus d'informations</a>
      </div>
      <div class="card">
        <div class="badge">B2</div>
        <h4>Zerifikat B2</h4>
        <p>L'examen ÖSD ZERTIFIKAT B2 est semi-modulaire. Il se compose d'un module écrit (Lire + Écouter + Écrire) et d'un module oral.</p>
        <a href="#" class="info-btn">Plus d'informations</a>
      </div>
    </div>
  </div>
</section>

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