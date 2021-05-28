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

    <title>Enggaarden Skolen for Akademisk Ridekunst</title>
</head>
<!-- Nedestående class til body gør at footeren bliver sidende i bunden af siden, ligemeget hvilket viewpoint man har, og hvor meget content der er-->
<body class="d-flex flex-column h-100">
    <!--Header include. Header fil ligger under inc -->
<?php include("inc/header.html");?>

<!--Content på siden -->


<!--Header slider-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/Enggaarden_Rideskole_slider1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Enggaarden_Rideskole_slider2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Enggaarden_Rideskole_slider3.jpg" alt="Third slide">
    </div>
  </div>
</div>

<!--Om skolen + billeder-->
<div class="container">
  <div class="row">
    <div class="col index-text col-lg-5">
      <h3>Sikker start på ridekarrieren</h3>
      <p>For os her på Enggaarden er det vigtigt at alle får en sikker start på deres ridekarriere. Vi prioritere den sikre grundridning højt, inden man får lov til at ride selv, samt at man lærer omgangen med hest. </p>
    </div>

    <div class="col"></div>
      <img class="col-lg-6" src="img/enggaarden_rideskole_standin.png" alt="">
    
  </div>

  <div class="row">
      <img class="col-lg-6" src="img/enggaarden_rideskole_standin.png" alt="">
      <div class="col"></div>
    <div class="col index-text col-lg-5">
      <h3>Hesten er en makker, ikke et instrument</h3>
      <p>Vi vægter forholdet til hest højt. Hos os er hesten ikke bare et transportmiddel der skal få os fra A til B eller et instrument der skal gøre hvad vi beder den om, men en makker, man samarbejder med for at opnå mål i vores ridning. </p>
    </div>
  </div>

  <div class="row">
    <div class="col index-text col-lg-5">
      <h3>Altid et smil på læben</h3>
      <p>Hos Enggaarden er vi lidt af en familie. Både vores praktikanter, elever, ansatte og opstaldere er en del af vores gode samarbejde, der gør at Enggaarden er et godt sted at være for alle. Nye, samt gamle elever, bliver altid modtaget med et smil.  </p>
    </div>
    <div class="col"></div>
      <img class="col-lg-6" src="img/enggaarden_rideskole_standin.png" alt="">
    
  </div>
</div>



<!--Video-->
<div class="container">
<div class="row">
  

    <div class="col col-lg-6">
    <video width="640" height="480" controls>
  <source src="video/Enggaarden_intro.mp4" type="video/mp4">
</video>
</div>
<div class="col"></div>
<div class="col index-text col-md-5">
      <h3>Enggaarden Skolen for Akademisk Ridekunst</h3>
      <p>Velkommen til Enggaarden. 
Vores rideskole blev stiftet tilbage i 1990, hvor vi hovedsageligt red dressur og spring. I starten af 2000 skiftede vi til Akademisk Ridekunst med ønsket om, at hesten skulle være en makker og ikke bare et instrument. Vi har undervist i det siden. 
Vi ligger i det naturskønne område nær Ruslands Bakker, med 20 minutters ridt til Klosterris Hegn og 30-40 minutters ridt til Dronningmølle Strand. Vi har eget ridehus samt udendørs ridebane. Vi tilbyder ridelejre og kurser med Bent Branderup.
  </p>
    </div>
    </div>
  </div>
</div>




<div class="fluid-container newsletter">
  

<!-- Begin Mailchimp Signup Form -->
<div id="mc_embed_signup">
<form action="https://gmail.us6.list-manage.com/subscribe/post?u=e0118f91a495cacee36736e3a&amp;id=8d97063144" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	
<div class="mc-field-group">
<div class="velkomst center">
<h2>Tildmeld dig vores nyhedbrev, <br> og hold dig opdateret med det seneste nye fra Enggaarden</h2>
</div>
	<label for="mce-EMAIL">Email Address </label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e0118f91a495cacee36736e3a_8d97063144" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
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