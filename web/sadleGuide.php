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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/9cb253356d.js" crossorigin="anonymous"></script>

    <title>Sadleguide | Enggaarden Skolen for Akademisk Ridekunst</title>
</head>
<!-- Nedestående class til body gør at footeren bliver sidende i bunden af siden, ligemeget hvilket viewpoint man har, og hvor meget content der er-->
<body class="d-flex flex-column h-100">
    <!--Header include. Header fil ligger under inc -->
<?php include("inc/header.html");?>

<!--Content på siden -->
<span><h1>Udfyld side om sadleguide her</h1></span>


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