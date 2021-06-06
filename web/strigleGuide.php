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

    <title>Strigleguide | Enggaarden Skolen for Akademisk Ridekunst</title>
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

<!-- modal til betaling -->
<!-- Modal -->
<div class="modal fade" id="myModal" data-bs-toggle="modal" data-bs-target="#myModal" data-bs-backdrop="static" data-bs-keyboard="false" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Strigleguide</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         Følgende indeholder en strigleguide. For at se indholdet på denne side skal du betale 15,-. Du kan gå til betaling ved at trykke på "Gå til betaling".
      </div>
      <div class="modal-footer">
       <a href="videoemner.php" class="tilbageknap">Gå tilbage til videoer</a>
                    <a href="betaling-blod.php" class="betalingsknap">Gå til betaling</a>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
        <div class="row">

            <div class="col-12 text-center">
                <h1 class="titel">Sådan strigler du hesten</h1>
            </div>

        </div>

        <div class="row videoRow">
            <div class="embed-responsive embed-responsive-4by3">

               <video class="video-fluid z-depth-1" width="320" height="240" controls>
                    <source src="video/enggaarden_rideskole_striglevideo.mp4" type="video/mp4" class="embed-responsive-item">
                </video>

            </div>

        </div>

        <div class="row">

         <!-- Fyldediv -->
        <div class="col-0 col-lg-2"></div>

        <div class="col-12 col-lg-8 blodtyper-beskrivelse">
             <h2>Hvorfor skal jeg strigle hesten?</h2>
        <p> 
            Det er vigtigt at man strigler hesten inden og også helst efter ridning, for at undgå irritationer hos hesten og eventuelle skader.
        </p>
         <br>
            <h3>Hårde strigler</h3>
        <p>Når man strigler starter man med de hårde strigler. Vi starter her med en rund hård plasticbørste, som man laver en ringbevægelse med. Den kan bruges på kroppen, men ikke i hovedet eller for langt ned på benene. <br>
        Når man har taget hele kroppen, inklusiv maven, går vi videre til en normal plasticbørste. Den kan bruges på hele kroppen og her strigler man med hårene.  
        </p>
        <br>
           <h3>Mildere strigler</h3>
        <p>Når vi har været igennem de to hårde strigler, kan vi gå videre til strigler der er mere mildere i det. Det er hovedsageligt dem med "hår" på. Her følger du stadig med hårene. I denne fase går du til mildere og mildere strigle. De kan bruges over hele kroppen, men ikke i hovedet.  
        </p>
        <br>
         <h3>Hoved</h3>
        <p>Der er lavet specielle hovedbørster til heste, men egentlig kan alle bløde strigler bruges. Det er vigitgt at du ikke rammer hesten i øjet, og strigler stadig med hårene.
        </p>
        <h3>Hale plus man</h3>
        <p>Der er lavet specielle man- og halebørster, men en normal plasticbørste kan også bruges. Her strigler du igen med hårene. Halen tager du af små omgange.
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
