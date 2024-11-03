<!-- calendar.php -->
<?= $this->extend('layouts/mainlayout') ?>

<?= $this->section('title') ?>
Calendrier des Sessions
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<style>
    /* Styles pour le calendrier */
    .calendar-header {
        text-align: center;
        background-color: #e0f7fa;
        padding: 30px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .calendar-header h1 {
        color: #0277bd;
        font-size: 2.5rem;
        margin-bottom: 10px;
    }

    .calendar-header p {
        color: #7b1fa2;
        font-size: 1.1rem;
        font-weight: 500;
    }

    .filter-buttons {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .filter-buttons button {
        background-color: #00796b;
        color: #fff;
        border: none;
        padding: 10px 20px;
        margin: 0 10px;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .filter-buttons button:hover {
        background-color: #004d40;
    }

    .session-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        margin-top: 20px;
    }

    .session-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        width: 300px;
        padding: 20px;
        text-align: center;
        transition: transform 0.3s;
    }

    .session-card:hover {
        transform: translateY(-5px);
    }

    .session-card h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
        color: #0288d1;
    }

    .session-card .badge {
        display: inline-block;
        background-color: #ffb300;
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 0.9rem;
        margin-bottom: 10px;
    }

    .session-card p {
        font-size: 0.95rem;
        color: #555;
        margin-bottom: 5px;
    }

    .session-card .date-info {
        font-size: 0.85rem;
        color: #757575;
        margin-top: 10px;
    }
</style>

<div class="calendar-header">
    <h1>Calendrier des Sessions</h1>
    <p>L'inscription peut être arrêtée avant la date limite dès qu'il n'y a plus de places disponibles.</p>
</div>

<div class="filter-buttons">
    <button>All</button>
    <button>Prüfung A1</button>
    <button>Prüfung A2</button>
    <button>Prüfung B1</button>
    <button>Prüfung B2</button>
</div>

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
    </div>

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
    </div>
    <!-- Ajoutez plus de cartes de session si nécessaire -->
</div>
<?= $this->endSection() ?>
