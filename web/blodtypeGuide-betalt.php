<?php
    // Secret page, kun adgang via login
    session_start();
    if ($_SESSION['logged_in'] == true)
    { 
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

    <title>Blodtypeguide | Enggaarden Skolen for Akademisk Ridekunst</title>
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

<div class="container-fluid">
<!-- modal til betaling -->



<!-- content -->

        <div class="row">
            <div class="col-12 text-center">
                <h1 class="titel">De forskellige blodtyper hos heste</h1>
            </div>

        </div>

        <div class="row videoRow">
            <div class="embed-responsive embed-responsive-4by3">

               <video class="video-fluid z-depth-1" width="320" height="240" controls>
                    <source src="video/enggaarden_rideskole_racevideo.mp4" type="video/mp4" class="embed-responsive-item">
                </video>

            </div>

        </div>


        <div class="row">

         <!-- Fyldediv -->
        <div class="col-0 col-lg-2"></div>

        <div class="col-12 col-lg-8 blodtyper-beskrivelse">
             <h2>Hvilke blodtyper er der?</h2>
        <p> Lige nu tænker du nok over hvad der menes med blodtyper hos heste - og nej det er ikke rhesus positiv. Man deler heste op i tre kategorier: Koldblod, varmblod og fuldblod. <br>
            Man kan kalde de tre kategorier for grundstammerne til alle eksisterende hesteracer vi har i dag. Med det menes der alle rene hesteracer og ikke blandingsracer. Men man skal dog stadig huske det bare er en kategoring af hestetyper, der er altid nogle individer der falder uden for kategorierne.   
        </p>
         <br>
            <h3>Koldblodsheste</h3>
        <p>Koldblodsheste er en hest der er mere "kold" i hovedet, dvs. rolig, svær at hidse op, tager alting med ophøjet ro. Det er også i denne kategori, hvor alle de tunge heste hører til. Koldblod er alle typer bryggerheste, trækheste og i gamle dage hørte køreheste også herunder. <br>
        For eksempel var frederiksborgeren og oldenborgeren i gamle dage koldblodsheste. Men for omkring 100 år siden, startede man med at blande fuldblod i racen, så derfor er de i dag blevet varmblodsheste. 
        <br>
        Et lille udpluk af koldblodsheste på Enggaarden er Lucas.    
        </p>
        <br>
           <h3>Fuldblodsheste</h3>
        <p>Fuldblodsheste er en hest der har mere "fuld" fyrdighed i blodet, dvs. en hest der bliver let hidsig, samt bliver let ophidset, urolig og fyrlig. <br>  
        Fuldblodshesten er den letteste type hest blandt kategorierne. Under fuldblodsheste er det hovedsageligt arabisk fulblod OX og engelsk fuldblod XX (der faktisk er avlet på grundlaget af OX araberen), man associere til fuldblodsheste. Ligeledes er de også grundstammen til alle varmblodsheste. <br>
        I dag er rene fuldblodsheste dog ikke så eftertragtede, grundet deres fyrige temperament.    
        </p>
        <br>
         <h3>Varmblodsheste</h3>
        <p>Varmblodsheste er en blanding af koldblodsheste og fuldblodsheste. Alle moderne rideheste hører i dag til under denne kategori. <br> 
        En varmblodshest er en hest med ro på, men stadig lettere end en koldblodshest. Den er desuden også mere elegant og "varm" i hovedet end koldblodshesten.  
        <br>
        Et lille udpluk af koldblodsheste på Enggaarden er Tonka, Regazza, Kalida.  
        </p>
        </div>

        <!-- Fyldediv -->
        <div class="col-0 col-lg-2"></div>

        </div>

        <div class="row">
        <div class="col-12 text-center backToForum">

            <a href="videoemner.php">Tilbage til videoer</a>

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
    <script src="../work/javascript/main.js"></script>
</html>

<?php
    }
        else 
    {
        header("location: login.php");
    }
?>
