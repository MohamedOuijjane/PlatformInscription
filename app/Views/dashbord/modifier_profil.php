<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    .container-profile {
        max-width: 900px;
        margin: 50px auto;
        background-color: #ffffff;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        padding: 30px;
        display: flex;
        gap: 30px;
    }

    /* Section gauche (icône admin) */
    .profile-icon {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-right: 2px solid #e9ecef;
        padding-right: 20px;
    }

    .profile-icon i {
        font-size: 120px;
        color: #0190BB;
        margin-bottom: 20px;
    }

    .profile-info {
        text-align: center;
    }

    .profile-info h5 {
        font-size: 1.25rem;
        font-weight: bold;
        color: #4e73df;
    }

    .profile-info p {
        font-size: 0.95rem;
        color: #6c757d;
    }

    /* Section droite (formulaire) */
    .profile-form {
        flex: 2;
    }

    .profile-form h3 {
        text-align: center;
        color: #0190BB;
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
        font-size: 0.95rem;
        transition: all 0.3s ease-in-out;
    }

    .form-control:focus {
        border-color: #4e73df;
        box-shadow: 0 0 5px rgba(78, 115, 223, 0.3);
    }

    .form-group-icon {
        position: relative;
    }

    .form-group-icon i {
        position: absolute;
    top: 69%;
    left: 12px;
    transform: translateY(-50%);
    color: #3f424c;
    font-size: 1.4rem;
    }

    .readonly-field {
        background-color: #f8f9fa !important;
        pointer-events: none;
    }

    .btn-primary {
        background-color: #4e73df;
        border: none;
        font-size: 1rem;
        font-weight: bold;
        text-transform: uppercase;
        padding: 12px;
        width: 100%;
        border-radius: 8px;
        transition: background-color 0.3s ease-in-out;
        color: white;
    }

    .btn-primary:hover {
        background-color: #2e59d9;
    }

    .alert {
        margin-bottom: 20px;
        font-size: 0.9rem;
    }
    #R{
        color: #2e59d9;
    }
</style>

<div class="container-profile">
    <!-- Section gauche -->
    <div class="profile-icon">
        <i class="bi bi-person-circle" id="R"></i>
        <div class="profile-info">
            <h5><?= $user['username'] ?></h5>
            <p>Administrateur Certify Easy</p>
        </div>
    </div>

    <!-- Section droite -->
    <div class="profile-form">
        <h3>Modifier le Profil</h3>

        <?php if (session()->has('success')): ?>
            <div class="alert alert-success"><?= session('success') ?></div>
        <?php endif; ?>

        <?php if (session()->has('error')): ?>
            <div class="alert alert-danger"><?= session('error') ?></div>
        <?php endif; ?>

        <form method="post" action="<?= base_url('profile/updatePassword') ?>">
            <div class="mb-3 form-group-icon">
                <i class="bi bi-person"></i>
                <label for="prenom" class="form-label">Nom</label>
                <input type="text" class="form-control readonly-field" id="prenom" value="<?= $user['username'] ?>" readonly>
            </div>

            <div class="mb-3 form-group-icon">
                <i class="bi bi-envelope"></i>
                <label for="nom" class="form-label">Email</label>
                <input type="email" class="form-control readonly-field" id="nom" value="<?= $user['email'] ?>" readonly>
            </div>

            <div class="mb-3 form-group-icon">
                <i class="bi bi-person-badge"></i>
                <label for="role" class="form-label">Rôle</label>
                <input type="text" class="form-control readonly-field" id="role" value="<?= $user['role'] ?>" readonly>
            </div>

            <div class="mb-3 form-group-icon">
                <i class="bi bi-lock"></i>
                <label for="motDePasse" class="form-label">Nouveau Mot de Passe</label>
                <input type="password" class="form-control" id="motDePasse" name="new_password" placeholder="Entrer votre nouveau mot de passe">
            </div>

            <div class="mb-3 form-group-icon">
                <i class="bi bi-lock"></i>
                <label for="confirmerMotDePasse" class="form-label">Confirmer le Mot de Passe</label>
                <input type="password" class="form-control" id="confirmerMotDePasse" name="confirm_password" placeholder="Confirmer votre nouveau mot de passe">
            </div>

            <button type="submit" class="btn btn-primary">Sauvegarder les Modifications</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
