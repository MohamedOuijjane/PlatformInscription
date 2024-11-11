<?= $this->extend('dashboardCLient/mainDashboard') ?>

<?= $this->section('content') ?>
<style>
    /* Styles généraux */
    body {
        font-family: 'Roboto', sans-serif;
        background: linear-gradient(135deg, #f4f6f8, #d9e4ec);
    }

    .container {
        max-width: 95%;
       margin-top: 70px;
      
    }

    .card {
        border-radius: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        border: none;
        background: #ffffff;
        border: 1px solid beige;
        
    }

    .card-header {
        background-color: transparent;
        color: #007bff;
        font-weight: bold;
        text-align: center;
        padding-bottom: 5px;
        font-size: 1.5rem;
    }

    .form-label {
        font-weight: 600;
        color: #333;
    }

    .form-control {
        border-radius: 10px;
        border: 1px solid #ddd;
        transition: border-color 0.3s, box-shadow 0.3s;
        height: 40px;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
    }

    /* Styles des icônes */
    .form-group-icon {
        position: relative;
    }

    .form-group-icon i {
        position: absolute;
        top: 73%;
        left: 15px;
        
        transform: translateY(-50%);
        color: #007bff;
        font-size: 0.9rem;
    }

    /* Bouton */
    .btn-success {
        background: linear-gradient(135deg, #4CAF50, #36A764);
        border: none;
        padding: 10px 20px;
        font-size: 1rem;
        border-radius: 20px;
        transition: background 0.3s, transform 0.2s;
        width: 100%;
        color: #fff;
    }

    .btn-success:hover {
        transform: translateY(-3px);
        background: linear-gradient(135deg, #36A764, #4CAF50);
    }
</style>

<div class="container">
    <div class="card">
        <div class="card-header">Convocation!</div>
    </div>
</div>
<?= $this->endSection() ?>
