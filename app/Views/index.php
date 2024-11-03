<?= $this->extend('layouts/mainlayouts') ?>

<?= $this->section('title') ?>
Page d'Accueil
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/image1.jpg" class="d-block w-100" alt="Image 1">
    </div>
    <div class="carousel-item">
        <img src="images/image2.png" class="d-block w-100" alt="Image 2">
    </div>
    <div class="carousel-item">
        <img src="images/image3.jpg" class="d-block w-100" alt="Image 3">
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

<div class="container my-5">
    <h2 class="text-center">Diplôme De Langue Allemande (ÖSD)</h2>
    <p class="text-center">
        Examens et certificats d'allemand reconnus internationalement pour les enfants, les jeunes apprenants et les adultes.
    </p>
    <div class="text-center">
        <a href="#" class="btn btn-primary">Plus d'informations</a>
        <a href="#" class="btn btn-outline-primary">Les sessions disponibles</a>
    </div>
</div>
<?= $this->endSection() ?>
