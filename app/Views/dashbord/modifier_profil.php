<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    /* General Container */
    .container-password {
        max-width: 450px;
        margin: 80px auto;
        background: linear-gradient(to bottom right, #ffffff, #f3f4f6);
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
        text-align: center;
    }

    /* Logo at the top */
    .logo-container {
        text-align: center;
        margin-bottom: 15px;
    }

    .logo-container img {
        max-width: 100px;
        margin-bottom: 10px;
    }

    .logo-container h3 {
        font-weight: bold;
        color: #4e73df;
    }

    /* Input Fields */
    .form-group {
        position: relative;
        margin-bottom: 20px;
    }

    .form-label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
        color: #333;
        text-align: left;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        padding-right: 40px;
        border: 1px solid #d1d3e2;
        border-radius: 10px;
        font-size: 0.95rem;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #4e73df;
        box-shadow: 0 0 8px rgba(78, 115, 223, 0.3);
    }

    /* Password Toggle */
    .toggle-password {
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
        cursor: pointer;
        font-size: 1.25rem;
        color: #aaa;
    }

    .toggle-password:hover {
        color: #4e73df;
    }

    /* Button */
    .btn-submit {
        background: linear-gradient(to right, #4e73df, #2e59d9);
        color: #fff;
        font-weight: bold;
        padding: 12px;
        width: 100%;
        border: none;
        border-radius: 10px;
        font-size: 1rem;
        text-transform: uppercase;
        transition: all 0.3s ease-in-out;
    }

    .btn-submit:hover {
        background: linear-gradient(to right, #2e59d9, #224abe);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    /* Welcome Header */
    .welcome {
        margin-bottom: 20px;
        color: #333;
        font-weight: bold;
        text-align: center;
    }
</style>

<div class="container-password">
    <!-- Logo -->
    <div class="logo-container">
        <img src="<?= base_url('images/logo.png') ?>" alt="Logo">
        <h3>Certify Easy</h3>
    </div>

    <!-- Welcome Message -->
    <div class="welcome">
        <p>Bienvenue, <?= session('user_name') ?> !</p>
        <h4>Modifier le Mot de Passe</h4>
    </div>

    <!-- Form -->
    <?php if (session()->has('success')): ?>
        <div class="alert alert-success"><?= session('success') ?></div>
    <?php endif; ?>

    <?php if (session()->has('error')): ?>
        <div class="alert alert-danger"><?= session('error') ?></div>
    <?php endif; ?>

    <form method="post" action="<?= base_url('profile/updatePassword') ?>">
        <div class="form-group">
            <label for="new_password" class="form-label">Nouveau Mot de Passe</label>
            <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Entrer votre nouveau mot de passe" required>
            <i class="bi bi-eye toggle-password" onclick="togglePassword('new_password')"></i>
        </div>
        <div class="form-group">
            <label for="confirm_password" class="form-label">Confirmer le Mot de Passe</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmer votre nouveau mot de passe" required>
            <i class="bi bi-eye toggle-password" onclick="togglePassword('confirm_password')"></i>
        </div>
        <button type="submit" class="btn-submit">Sauvegarder les Modifications</button>
    </form>
</div>

<script>
    function togglePassword(id) {
        const field = document.getElementById(id);
        if (field.type === "password") {
            field.type = "text";
        } else {
            field.type = "password";
        }
    }
</script>
<?= $this->endSection() ?>
