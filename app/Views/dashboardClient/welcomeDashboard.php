<?= $this->extend('dashboardCLient/mainDashboard') ?>

<?= $this->section('content') ?>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Inter", sans-serif;
    }
    .container {
        margin-top: 10%;
    }
    .form-container {
        font-family: "Inter", sans-serif;
        width: 100%;
        max-width: 400px;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        margin-right: 50%;
    }
    form {
        width: 300%;
        margin: 10%;
        border-color: black;
        border-radius: 5px;   
        background-color: #fafafa ;
        border: 1px solid;
        border-color:#cccccc;
    }
    form h2 {
        margin-bottom: 20px;
        color: #333333;
    }

    form label {
        display: block;
        text-align: left;
        margin-bottom: 5px;
        color: #555555;
        font-weight: bold;
    }

    form input {
        width: 60%;
        padding: 8px;
        margin-bottom: 20px;
        border: 1px solid #cccccc;
        border-radius: 4px;
        font-size: 16px;
    }

    .title{
        padding: 10px;
        text-align: left;
        position: relative;
        font-size: 25px;

    }
    .titleContainer{
        background-color: #f3f3f3;
    }
    .title::after {
        content: "";
        position: absolute;
        bottom: 0; /* Position the line at the bottom of the padding */
        left: 0;
        width: 100%;
        height: 1px; /* Thickness of the line */
        background-color:  #115DFC; /* Color of the line */
    }
        @keyframes colorChange {
    0%   {
         color: blue;
        }
        100% {
        color: red;
        }}
    .clignote {
    animation: colorChange 1s infinite alternate;
    text-align: center; 
    font-family: system-ui;
    font-size: 30px;
    }
    .spanDateExamen{
        font-weight: bold; 
        color: #666666;
        margin-left: -241px;
    }
    .spanDateExamen2{
        color: #A3A3A3;
    }
    .spanRef1{
        color: #666666;
        font-weight: bold;
    }
    .spanRef2{
        color: #A3A3A3;
    }
    .spans h5{
        margin-left: -30%;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
</style>

<div class="container">
    <div class="card">
        <div class="card-header"><h1>Bonjour chèr(e) Client, $ClientName!</h1></div>
        <div class="clignote">Votre pré-inscription en ligne est envoyée!</div>
        <div class="form-container">
            <form class="form_container"> 
                <div class="titleContainer">
                    <p class="title">$Prufung B2</p>
                </div>
                <div class="spans">
                <h5>
                    <span class="spanRef1">Référence d'inscription:</span>
                    <span class="spanRef2">EK3663366552101100</span>
                </h5>
                <h5 class="dateE" >
                    <span class="spanDateExamen">Date d'examen:</span>
                    <span class="spanDateExamen2">$date</span>
                </h5>

                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
