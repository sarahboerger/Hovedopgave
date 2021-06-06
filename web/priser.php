<!DOCTYPE html>
<!-- class="h-100" = Vi giver besked på at den skal være 100% i størrelse-->
<html class="h-100" lang="da">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Enggaarden Skolen for Akademisk Ridekunst, er en rideskole der vægter veldfærdet af både rytter og hest højt.">
  <meta name="keywords" content="Enggaarden,Rideskole,Enggaarden Skolen for Akademisk Ridekunst,Akademisk Ridekunst">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/9cb253356d.js" crossorigin="anonymous"></script>

    <title>Priser | Enggaarden Skolen for Akademisk Ridekunst</title>
</head>
<!-- Nedestående class til body gør at footeren bliver sidende i bunden af siden, ligemeget hvilket viewpoint man har, og hvor meget content der er-->
<body class="d-flex flex-column h-100">
    <!--Header include. Header fil ligger under inc -->
<?php include("inc/header.html");?>

<?php

session_start();
       if( !empty($_SESSION['logged_in'] ) ){
        include("inc/profilheader.html");
        }
    
?>

<!--Content på siden -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Priser</h1>
                <p>Her hos enggaarden tilbyder vi opstaldning, træning af hest, rideskole hold, eneundervisning og ridelejre. Udover det, får vi besøg af Bent Branderup to gange om året (hovedsageligt April og August). <br> <br>
                </p>
                <br>
                <h3>Holdundervisning:</h3>
                        <p>
                        Over 18: 600,- <br>
                        <br>
                        Under 18: 550,- <br> <br>
                        </p>

                        <h3>Enetimer:</h3>
                        <p>
                        1 time: 650,- <br>
                        <br>
                        ½ time: 350,- <br> <br>
                        </p>


                        <h3>Ridelejr:</h3>
                        <p>Uge 27 og 28: Mandag til lørdag - 3500,- <br> <br></p>


                        <h3>Opstaldning:</h3>
                        <p>4000,- pr. måned</p>
                        </div>
            </div>
        </div>



    </div>


<!--Footer include. Footer fil ligger under inc -->
<?php include 'inc/footer.html';?>
</body>
 <!-- jQuery + Bootstrap + own JS -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha3/js/bootstrap.min.js"></script>
<!--<script src="../work/javascript/main.js"></script> -->
</html>