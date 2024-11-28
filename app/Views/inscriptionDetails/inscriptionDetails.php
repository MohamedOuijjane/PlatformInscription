<?= $this->extend('layouts/mainlayouts') ?>
<?= $this->section('title') ?>
Pré-inscrire en ligne
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Inter", sans-serif;
    }
    .form-container {
        font-family: "Inter", sans-serif;
        width: 100%;
        max-width: 400px;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
    }
    form {
        width: 300%; /* Adjust to desired width (e.g., 100% for full width or 80% for slightly smaller) */
        margin-left: 40%;
        margin-top: 1% ;
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

    form input[type="text"] {
        width: 60%;
        padding: 8px;
        margin-bottom: 20px;
        border: 1px solid #cccccc;
        border-radius: 4px;
        font-size: 16px;
    }
    .input_label {
        font-size: 16px;
        margin-left: 20%;
    }
    .button_container{
        background-color: #f4f4f4;
    }

    form button {
        width: 12%;
        margin: 8px;
        padding: 6px 12px;
        padding-left: 10px;
        margin-bottom: 5px;
        margin-left: 85%;
        background-color: #70bce4;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 15px;
        font-weight: normal;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    form button:hover {
        background-color: #0e4b99;
    }
    .title{
        padding: 10px;
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
    
    .background-section {
            background-image: url('<?= base_url('images/admission1.jpg') ?>'); /* Replace with your own image */
            background-size: cover; /* Makes the image cover the entire container */
            background-position: center; /* Centers the background image */
            width: 1580px;
            margin-left: -115px;
            height: 150px; /* Adjust height as needed */
            display: flex;
            align-items: center;
            justify-content: center;
            
        }

        /* Centered div with text */
        .overlay-text {
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            padding: 14px 50px 16px 30px;
            letter-spacing: 0.3px;
            border-radius: 28px 0;
            font-size: 1.2em;
            color: #333; /* Text color */
            font-weight: bold;
            font-size: 30px;
        }
        *, ::after, ::before {
         box-sizing: border-box;
        }

        /* Additional styling for the text */
        .overlay-text span {
            color: #007bff; /* Blue color for a specific part of the text */
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
    }
    h4 {
    font-size: 24px;
    }
    @media (max-width: 768px) {
        form {
            width: 100%;
            margin: 10px auto;
        }
        .background-section {
            height: 100px; /* Reduce height on smaller screens */
        }
        h4 {
            font-size: 18px; /* Adjust font size for smaller screens */
        }
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
        margin-left: 42%;
    }

</style>
<div class="background-section">
        <div class="overlay-text">
            <span>S</span>e pré-inscrire en ligne
        </div>
</div>
<h4 class="clignote" >L'inscription peut être arrêtée avant la date limite dès qu'il n'y a plus de places disponibles.</h4>

<div class="exam-id-container">
    <?= esc($exam_level) ?>
</div>

<div class="form-container" >
    <form   action="<?= base_url('/saveCin') ?>" method="POST" > 
        <div class="titleContainer">
            <p class="title">Veuillez saisir votre CIN</p>
        </div>
        <div>
        <input type="hidden" name="exam_level" value="<?= esc($exam_level) ?>">
        </div>
        <div class="input_container">
            <label class="input_label" for="cin_field">CIN <sup><span style="color: red;" ></span>*</sup> </label>
            <input placeholder="Veuillez saisir votre CIN" name="cin" type="text" class="input_field" id="cin_field" required>
        </div>
        <div class="button_container">
                    <button type="submit" class="submit_btn"><i class="fas fa-forward"> </i> Suivant</button>
        </div> 
         
    </form>
</div>
<?= $this->endSection() ?>