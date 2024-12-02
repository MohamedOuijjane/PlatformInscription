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
        margin-top: 5%;
        border-radius: 10px;


    }
    .form-container {
        font-family: Arial, sans-serif;
        width: 100%;
        max-width: 400px;
        padding: 10px;
        margin-bottom: 45px;
        border-radius: 10px;
        text-align: center;
        margin-right: 50%;
        background: transparent;
        
    }
    form {
        width: 300%;
        margin: 10%;
        border-radius: 10px;   
        border: 1px solid #1e88e5;
        background: transparent;
        padding: 20px;
        margin-bottom: 35%;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }
    form h2 {
        margin-bottom: 10px;
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
    .exam-id-container {
        display: inline-block; /* Makes it behave like a block but flow inline */
        text-align: center; /* Centers text inside the box */
        background-color: #FFC878; /* Match the orange color from the second image */
        color: #000; /* Black text */
        font-weight: bold; /* Make the text bold */
        font-size: 20px; /* Adjust font size as needed */
        width: 60px; /* Set fixed width */
        height: 60px; /* Set fixed height */
        line-height: 60px; /* Vertically align text */
        border-radius: 5px; /* Rounded corners */
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); /* Add subtle shadow for depth */
        margin-left: 45%;
        margin-top: 20px;
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
        margin-left: 25px;
    }
    .spanDateExamen2{
        color: #A3A3A3;
    }
    .spanCIN{
        font-weight: bold; 
        color: #666666;
        margin-left: -93px;
    }
    .spanCIN2{
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
    .card-header {
    background-color: #f8f9fa;
    padding: 20px;
    border-bottom: 1px solid #e9ecef;
    }
    .card-header h1 {
        font-size: 24px;
        color: #343a40;
    }

</style>    

<div class="container">
    <div class="card">
    <div class="card-header"><h1>Bonjour cher(ère) client(e), <span><?= $username ?></span></h1></div>
        <div class="clignote">Votre préinscription en ligne a bien été envoyée!</div>
        <div class="exam-id-container">
                    <?= esc($examLevel) ?>
        </div>
        <div class="form-container">
            <form class="form_container"> 
                <div class="titleContainer">
                    <p class="title">Vos informations d'inscription en ligne:</p>
                </div>
                <div class="spans">
                <h5>
                    <span class="spanRef1">Référence d'inscription:</span>
                    <span class="spanRef2"><?= $reference ?></span>
                </h5>
                <h5 class="dateE" >
                    <span class="spanDateExamen">Date d'examen:</span>
                    <span class="spanDateExamen2"><?= $examDate ?></span>
                </h5>
                <h5 class="CIN" >
                    <span class="spanCIN">CIN:</span>
                    <span class="spanRef2"><?= $CIN ?></span>
                </h5>

                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
