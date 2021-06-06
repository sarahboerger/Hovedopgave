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

    <title>Teamet | Enggaarden Skolen for Akademisk Ridekunst</title>
</head>
<!-- Nedestående class til body gør at footeren bliver sidende i bunden af siden, ligemeget hvilket viewpoint man har, og hvor meget content der er-->
<body class="d-flex flex-column h-100">
    <!--Header include. Header fil ligger under inc -->
<?php include("inc/header.html");?>

<!--Content på siden -->
<?php
session_start();
       if( !empty($_SESSION['logged_in'] ) ){
        include("inc/profilheader.html");
        }

?>

<div class="container-fluid">

<div class="row">

<div class="col-12 text-center">

  <h1>Teamet på Enggaarden</h1>

</div>

</div>

<div class="row team-content">
   <!-- Fyldediv -->
  <div class="col-lg-2"></div>
  
    <div class="col-lg-4">
      <img class="w-100" src="img/Enggaarden_Susanne_Polaroid.png" alt="Enggaarden Susanne Lanciai">
    </div>

    <div class="col-lg-4">
      <h3>Susanne Lanciai</h3>
      <p>Susanne er stifteren af rideskolen og har redet Akademisk ridekunst siden 2000. Underviser et voksenhold om Mandagen, træner heste, samt eneundervisning. Medlem af The Knighthood og tog opdateringen til væbnerprøven i 2017.
 </p>
    </div>
     <!-- Fyldediv -->
     <div class="col-lg-2"></div>

  </div>

  <div class="row team-content">
     <!-- Fyldediv -->
     <div class="col-lg-2"></div>

    <div class="col-lg-4">
      <img class="w-100" src="img/Enggaarden_Michelle_Polaroid.png" alt="Enggaarden Michelle Wolf">
    </div>

    <div class="col-lg-4">
      <h3>Michelle Wolf</h3>
      <p>Michelle Wolf har redet Akademisk Ridekunst siden 2000 og er ridder af The Knighthood. Hun er desuden certificeret Bent Branderup træner. Hun træner hovedsageligt heste og har kun eneundervisning. 
 </p>
    </div>

     <!-- Fyldediv -->
     <div class="col-lg-2"></div>
  </div>

  <div class="row team-content">
     <!-- Fyldediv -->
     <div class="col-lg-2"></div>

    <div class="col-lg-4">
      <img class="w-100" src="img/Enggaarden_Sandra_Polaroid.png" alt="Enggaarden Sandra Larsson">
    </div>

    <div class="col-lg-4">
      <h3>Sandra Larsson</h3>
      <p>Sandra er staldens daglige leder og har styr på alt der foregår. Hun underviser alle rideskole holdene, træner heste samt eneundervisning. Sandra er også medlem af The Knighthood og fik sin opgradering til væbnerprøven i 2018.
 </p>
    </div>
    <!-- Fyldediv -->
     <div class="col-lg-2"></div>
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