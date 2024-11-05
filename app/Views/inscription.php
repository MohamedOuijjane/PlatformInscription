<?= $this->extend('layouts/mainlayouts') ?>

<?= $this->section('title') ?>
Page d'Accueil
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<style>
    /* Styles pour l'en-tête */
    .calendar-header {
        text-align: center;
        background-color: #f0f8ff;
        padding: 40px;
        border-radius: 12px;
        margin-bottom: 30px;
        color: #1e88e5;
    }

    .calendar-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .calendar-header p {
        font-size: 1rem;
        color: #1565c0;
        margin-top: 5px;
    }

    /* Conteneur des boutons de filtre */
    .filter-buttons {
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
    }

    .filter-buttons button {
        background-color: #42a5f5;
        color: #fff;
        border: none;
        padding: 8px 20px;
        margin: 0 8px;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 500;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s;
    }

    .filter-buttons button:hover {
        background-color: #1e88e5;
        transform: translateY(-2px);
    }

    /* Conteneur des sessions */
    .session-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    /* Cartes des sessions */
    .session-card {
        background-color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        width: 300px;
        padding: 20px;
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .session-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .session-card h3 {
        font-size: 1.2rem;
        font-weight: bold;
        color: #1e88e5;
        margin-bottom: 10px;
    }

    .session-card .badge {
        display: inline-block;
        background-color: #66bb6a;
        color: #fff;
        padding: 5px 12px;
        border-radius: 15px;
        font-size: 0.85rem;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .session-card p {
        font-size: 0.95rem;
        color: #555;
        margin-bottom: 5px;
    }

    .session-card .date-info {
        font-size: 0.85rem;
        color: #757575;
        margin-top: 15px;
    }

    /* Bouton de pré-inscription */
    .preinscription-btn {
        background-color: #1e88e5;
        color: #fff;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        font-size: 0.9rem;
        font-weight: 500;
        margin-top: 15px;
        cursor: pointer;
        transition: background-color 0.3s;
        text-decoration: none;
    }

    .preinscription-btn:hover {
        background-color: #1565c0;
    }
</style>

<div class="container my-5">
    <!-- En-tête du calendrier -->
    <div class="calendar-header">
        <h1>Calendrier des Sessions</h1>
        <p>L'inscription peut être arrêtée avant la date limite dès qu'il n'y a plus de places disponibles.</p>
    </div>

    <!-- Boutons de filtre -->
    <div class="filter-buttons">
        <button>Toutes</button>
        <button>Prüfung A1</button>
        <button>Prüfung A2</button>
        <button>Prüfung B1</button>
        <button>Prüfung B2</button>
    </div>

    <!-- Conteneur des sessions -->
    <div class="session-container">
        <div class="session-card">
            <h3>Dimanche 3 novembre 2024</h3>
            <span class="badge">B1</span>
            <p>Prüfung B1</p>
            <p>TANGER à 9:00</p>
            <p>DMG-Marokko, 11, Rue de Belgique</p>
            <div class="date-info">
                <p>Début d'inscription : 1 septembre 2024</p>
                <p>Date Limite : 22 octobre 2024</p>
            </div>
            <a href="https://osd.ma/home/preinscription" class="preinscription-btn">Se pré-inscrire en ligne</a>
        </div>
        <!-- Répétez les cartes pour les autres sessions -->
        <div class="session-card">
            <h3>Samedi 9 novembre 2024</h3>
            <span class="badge">B1</span>
            <p>Prüfung B1</p>
            <p>OUJDA à 10:00</p>
            <p>SIRIUS CENTER, Boulevard Med 6</p>
            <div class="date-info">
                <p>Début d'inscription : 1 septembre 2024</p>
                <p>Date Limite : 29 octobre 2024</p>
            </div>
            <a href="https://osd.ma/home/preinscription" class="preinscription-btn">Se pré-inscrire en ligne</a>
        </div>
        <div class="session-card">
            <h3>Dimanche 10 novembre 2024</h3>
            <span class="badge">A1</span>
            <p>Prüfung A1</p>
            <p>OUJDA à 9:00</p>
            <p>SIRIUS CENTER, Boulevard Med 6</p>
            <div class="date-info">
                <p>Début d'inscription : 1 septembre 2024</p>
                <p>Date Limite : 29 octobre 2024</p>
            </div>
            <a href="https://osd.ma/home/preinscription" class="preinscription-btn">Se pré-inscrire en ligne</a>
        </div>
        <!-- Ajoutez plus de cartes de session si nécessaire -->
    </div>
</div>
<?= $this->endSection() ?>