<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    /* Styles pour la page de modification du profil */
   
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
</style>

<div class="container-profile">
    <h3>Modifier le Profil</h3>
    <form>
        <div class="mb-3 form-group-icon">
            <i class="bi bi-person"></i>
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" placeholder="Entrer votre prénom">
        </div>

        <div class="mb-3 form-group-icon">
            <i class="bi bi-person"></i>
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrer votre nom">
        </div>

        <div class="mb-3 form-group-icon">
            <i class="bi bi-envelope"></i>
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Entrer votre email">
        </div>

        <div class="mb-3 form-group-icon">
            <i class="bi bi-lock"></i>
            <label for="motDePasse" class="form-label">Mot de Passe</label>
            <input type="password" class="form-control" id="motDePasse" placeholder="Entrer votre mot de passe">
        </div>

        <div class="mb-3 form-group-icon">
            <i class="bi bi-lock"></i>
            <label for="confirmerMotDePasse" class="form-label">Confirmer le Mot de Passe</label>
            <input type="password" class="form-control" id="confirmerMotDePasse" placeholder="Confirmer votre mot de passe">
        </div>

        <button type="submit" class="btn btn-primary w-100">Sauvegarder les Modifications</button>
    </form>
</div>
<?= $this->endSection() ?>
