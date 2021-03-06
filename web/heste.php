<?php
session_start();
?>
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

    <title>Hestene | Enggaarden Skolen for Akademisk Ridekunst</title>
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
            <h1>Enggaardens heste</h1>
            <p>Hos Enggaarden er en af vores prioriteter at vi har høj hestevelfærd. Det kan afspejles på alderen af nogle af vores heste. Vores heste er elsket af både store som små, og siger ikke nej til en godbid.</p>
        </div>
    </div>

            <div class="row">
                <div class="col-12 text-center">
                    <h2>Heste</h2>
                    <p>Enggaarden rideskole har på nuværende tidspunkt fire rideheste</p>
                </div>
            </div>


            <div class="row horse-row">
                <div class="col-lg-3"></div> 
                <div class="col-12 col-md-12 col-lg-3 horse-picture">
                     <img class="w-100" src="img/enggaarden_rideskole_hest_dusinus.png" alt="enggarden skolen for akademisk ridekust, rideskole hest dusinus">
                </div>
                <div class="col-12 col-md-12 col-lg-3 horse-picture">
                     <img class="w-100" src="img/enggaarden_rideskole_hest_maici.png" alt="enggarden skolen for akademisk ridekust, rideskole hest Maici"> 
                </div>
                <div class="col-lg-3"></div> 
            </div>

            <div class="row horse-row">
                <div class="col-lg-3"></div> 
                <div class="col-12 col-lg-3 horse-picture">
                <img class="w-100" src="img/enggaarden_rideskole_hest_regazza.png" alt="enggarden skolen for akademisk ridekust, rideskole hest Regazza">
                </div>
                <div class="col-12 col-lg-3 horse-picture">
                <img class="w-100" src="img/enggaarden_rideskole_hest_tonka.png" alt="enggarden skolen for akademisk ridekust, rideskole hest Tonka"> 
                </div>
                <div class="col-lg-3"></div> 
            </div>


            <div class="row ">
                <div class="col text-center">
                <h2>Ponyer</h2>
                <p>Enggaarden rideskole har på nuværende tidspunkt syv ponyer</p>
                </div>
            </div>

            <div class="row horse-row">
                <div class="col-lg-3"></div>    

                <div class="col-12 col-lg-3 horse-picture">
                <img class="w-100" src="img/enggaarden_rideskole_pony_jasmin.png" alt="enggarden skolen for akademisk ridekust, rideskole pony Jasmin">
                </div>
                <div class="col-12 col-lg-3 horse-picture">
                <img class="w-100" src="img/enggaarden_rideskole_pony_kalida.png" alt="enggarden skolen for akademisk ridekust, rideskole pony Kalida">
                </div>
                 <div class="col-lg-3"></div>  
            </div>

            <div class="row horse-row">
                 <div class="col-lg-3"></div> 
                <div class="col-12 col-lg-3 horse-picture">
                <img  class="w-100" src="img/enggaarden_rideskole_pony_kejser.png" alt="enggarden skolen for akademisk ridekust, rideskole pony Kejser">
                </div>
                <div class="col-12 col-lg-3 horse-picture">
                <img class="w-100" src="img/enggaarden_rideskole_pony_komet.png" alt="enggarden skolen for akademisk ridekust, rideskole pony Komet"> 
                </div>
                 <div class="col-lg-3"></div> 
            </div>

            <div class="row horse-row">
                 <div class="col-lg-3"></div> 
                <div class="col-12 col-lg-3 horse-picture">
                <img class="w-100" src="img/enggaarden_rideskole_pony_prinsessen.png" alt="enggarden skolen for akademisk ridekust, rideskole pony Prinsessen">
                </div>
                <div class="col-12 col-lg-3 horse-picture">
                <img class="w-100" src="img/enggaarden_rideskole_pony_speider.png" alt="enggarden skolen for akademisk ridekust, rideskole pony speider"> 
                </div>
                 <div class="col-lg-3"></div> 
            </div>


            <div class="row horse-row">
                <div class="col-lg-3"></div> 
                    <div class="col-12 col-lg-3 horse-picture">
                                    <img class="w-100" src="img/enggaarden_rideskole_pony_zippie.png" alt="enggarden skolen for akademisk ridekust, rideskole pony Miss Zippie">
                    </div>
                    <div class="col-12 col-lg-3 horse-picture">
                                    <img class="w-100" src="img/enggaarden_rideskole_pony_chestnut.png" alt="enggarden skolen for akademisk ridekust, rideskole pony chestnut">
                    </div>
                <div class="col-lg-3"></div> 
            </div>
               
                <div class="row horse-row">
                    <div class="col-lg-4"></div> 
                    <div class="col-12 col-lg-4 horse-picture">
                        <img class="w-100" src="img/enggaarden_rideskole_pony_lucas.png"
                            alt="enggarden skolen for akademisk ridekust, rideskole pony Lucas">
                    </div>
                    <div class="col-lg-4"></div> 
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