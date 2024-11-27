<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    .container-profile {
        max-width: 600px;
        margin: 70px auto;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

    h3 {
        text-align: center;
        margin-bottom: 20px;
        color: #0190BB;
        font-weight: bold;
    }

    .form-label {
        font-weight: 600;
    }

    .form-control {
        border-radius: 5px;
    }

    .btn-primary {
        background-color: #0190BB;
        border-color: #0190BB;
        border-radius: 5px;
    }

    .btn-primary:hover {
        background-color: #016a89;
        border-color: #016a89;
    }

    .form-group-icon {
        position: relative;
    }

    .form-group-icon i {
        position: absolute;
        top: 70%;
        left: 10px;
        transform: translateY(-50%);
        color: #0190BB;
    }

    .form-control {
        padding-left: 35px;
    }

    .readonly-field {
        background-color: #e9ecef !important;
        pointer-events: none;
    }
</style>

<div class="container-profile">
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

        <button type="submit" class="btn btn-primary w-100">Sauvegarder les Modifications</button>
    </form>
</div>
<?= $this->endSection() ?>
