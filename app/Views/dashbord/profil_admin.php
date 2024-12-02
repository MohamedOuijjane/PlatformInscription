<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    .container-profile {
        max-width: 805px;
        margin: 100px auto;
        background: linear-gradient(to right, #fefefe, #e7e7e773);
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        padding: 20px;
        display: flex;
        gap: 20px;
    }

    .profile-icon {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-right: 2px solid #e9ecef;
        padding-right: 15px;
    }

    .profile-icon img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .profile-info {
        text-align: center;
    }

    .profile-info h5 {
        font-size: 1.2rem;
        font-weight: bold;
        color: #4e73df;
    }

    .profile-info p {
        font-size: 0.9rem;
        color: #6c757d;
    }

    .profile-form {
        flex: 2;
    }

    .profile-form h3 {
        text-align: center;
        color: #4e73df;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .form-label {
        font-weight: bold;
        color: #333;
        margin-bottom: 5px;
    }

    .form-control {
        border-radius: 8px;
        border: 1px solid #d1d3e2;
        padding-left: 40px;
        height: 45px;
        font-size: 0.9rem;
        transition: all 0.3s ease-in-out;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        background-color: #f8f9fa;
        color: #6c757d;
        pointer-events: none;
    }

    .form-group-icon {
        position: relative;
    }

    .form-group-icon i {
        position: absolute;
        top: 70%;
        left: 12px;
        transform: translateY(-50%);
        color: #4e73df;
        font-size: 1.2rem;
        font-weight: bold;
    }

    @media (max-width: 768px) {
        .container-profile {
            flex-direction: column;
        }

        .profile-icon {
            border-right: none;
            padding-right: 0;
            margin-bottom: 20px;
        }
    }
</style>

<div class="container-profile">
    <!-- Section gauche -->
    <div class="profile-icon">
        <img src="<?= base_url('images/profiladmin.png') ?>" alt="Admin Profile">
        <div class="profile-info">
            <h5><?= $user['firstname'] .'  ' .$user['lastname'] ?></h5>
            <p>Administrateur Certify Easy</p>
            <p><?= ' Depuis' .$user['created_at'] ?></p>
        </div>
    </div>

    <!-- Section droite -->
    <div class="profile-form">
        <h3>Profil Administrateur</h3>

        <div class="mb-2 form-group-icon">
            <i class="bi bi-person"></i>
            <label for="prenom" class="form-label">Username</label>
            <input type="text" class="form-control" id="prenom" value="<?= $user['username'] ?>" readonly>
        </div>

        <div class="mb-2 form-group-icon">
            <i class="bi bi-envelope"></i>
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" value="<?= $user['email'] ?>" readonly>
        </div>

        <div class="mb-2 form-group-icon">
            <i class="bi bi-telephone"></i>
            <label for="phone" class="form-label">Numéro de Téléphone</label>
            <input type="text" class="form-control" id="phone" value="<?= $user['phone_number'] ?? 'Non spécifié' ?>" readonly>
        </div>

        <div class="mb-2 form-group-icon">
            <i class="bi bi-geo-alt"></i>
            <label for="address" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="address" value="<?= $user['address'] ?? 'Non spécifiée' ?>" readonly>
        </div>

        <div class="mb-2 form-group-icon">
            <i class="bi bi-calendar"></i>
            <label for="birth_date" class="form-label">Date de Naissance</label>
            <input type="text" class="form-control" id="birth_date" value="<?= $user['birth_date'] ?? 'Non spécifiée' ?>" readonly>
        </div>

        <div class="mb-2 form-group-icon">
            <i class="bi bi-credit-card"></i>
            <label for="cin" class="form-label">CIN</label>
            <input type="text" class="form-control" id="cin" value="<?= $user['CIN'] ?? 'Non spécifié' ?>" readonly>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
