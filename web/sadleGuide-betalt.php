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

    <title>Sadleguide | Enggaarden Skolen for Akademisk Ridekunst</title>
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
        <div class="row">

            <div class="col-12 text-center">
                <h1 class="titel">Op- og nedsadling af hesten</h1>
            </div>

        </div>

        <div class="row videoRow">
            <div class="embed-responsive embed-responsive-4by3">

               <video class="video-fluid z-depth-1" width="320" height="240" controls>
                    <source src="video/enggaarden_rideskole_sadling.mp4" type="video/mp4" class="embed-responsive-item">
                </video>

            </div>

        </div>

        <div class="row">

         <!-- Fyldediv -->
        <div class="col-0 col-lg-2"></div>

        <div class="col-12 col-lg-8 blodtyper-beskrivelse">
             <h2>Hvilket udstyr skal man bruge?</h2>
        <p> Når man køber sig en hest er det vigtigt at man har det mest essentielle udstyr. Man kan enten få det med når man køber hesten eller at man køber det når man har fået hesten. <br>
        Det udstyr man som minimum skal have er en sadel med saddelunderlag og et hovedtøj samt bid. Det er hvad vi fokuserer på her. Der er selvfølgelig også nogle der rider bidløst, men da vi ikke gør det på rideskolen, fokuserer vi ikke på det her.
        </p>
         <br>
            <h4>Sadlen</h4>
        <p>Sadlen er det redskab du bruger til at holde dig fast på hesten (udover din balance og sidde rigtigt). Det er altid vigtigt når du sidder i sadlen at du ikke har dine fødder helt inde i stigebøjlen, men kun dine tåspidser. Du kan risikere at sidde fast, hvis du falder af.
            <br>
            Det er vigtigt at sadlen passer til hesten, så den ikke får ubehag af at have den på. Derfor er det også en god ide med et saddelunderlag.   
        </p>
        <br>
           <h4>Hovedtøjet</h4>
        <p>Det er hovedtøjet du bruger til at styre hesten, indtil du når et vidst niveau i din ridning - så skifter det til hovedsageligt sædet.    
        </p>
            <br>
        <h2>Opsadling af hesten</h2>
         <h3>Påføring af sadlen</h3>
        <p>Når du sadler hesten op er det vigtigt du ikke bare lægger sadlen hårdt ned i ryggen på hesten, da det kan give hesten ubehag. Derfor er det vigitgt du ikke slipper sadlen før den ligger helt på ryggen af hesten. <br>
            Når vi har lagt sadlen på ryggen af hesten, er det vigtigt den ikke ligger for langt fremme eller for langt tilbage. Sadlen ligger for langt tilbage, hvis den ligger bag det sidste ribben. Og den ligger for langt fremme, hvis den ligger på skulderen af hesten.
            <br>
            Når vi har lagt sadlen rigtigt, kan vi sørge for at underlaget ligger rigtigt på begge sider af hesten.
            <h4>Gjorden</h4>
            For at sadlen skal sidde fast på ryggen af sadlen, har man et redskab der kaldes for en gjord. Hos os starter vi med at spænde gjorden let, og spænder den så ydeligere når vi er i ridehuset og skal til at påbegynde ridningen.
            <br>
            Hvor meget du skal spænde gjorden kommer an på hvor kort den er, hvor lang den er samt om hesten har gjordkrampe. Det du skal tænke på når du spænder gjord er at du hele tiden kan få en hånd imellem maven på hesten og gjorden. Hvis hesten har gjordkrampe, spændes gjorden kun lidt, et eller to huller indtil du er i ridehuset.   
        </p>
        <br>
           <h3>Påføring af hovedtøjet</h3>
        <p>Når du tager hovedtøj på er det vigtigt hesten er spændt fast gennem forløbet. Ved at den er det, er vi sikre på at den ikke går nogle veje.
        <h4>Fastspænding af hesten</h4>
        På de fleste grimer er der to firkantede ringe. Det er i disse ringe at karabinhagerne til snorene sættes på. Når de er sat på åbner du grimen via karabinhagen, eller spændet. Hvis du er højrehåndet tager du din højre hånd under hestens hoved, og tager fat i næseryggen. Derefter tager du grimen af, og via det store kæbehul, tager du den over hovedet på hesten og ned på halsen. Hesten er stadig fastbundet.
      <br>  <h4>Sådan tager du hovedtøjet på</h4>
        Da hesten er fastbundet skal vi ikke tænker over om den løber væk. <br>
        Du starter med at tage tøjlerne over hovedet på hesten, og ned på halsen af den. Derefter tager du din højre arm (hvis du er højrehåndet), under hestens hoved, og tager fat i næseryggen. Med samme hånd, tager du fat i toppen af trensen, samtidigt med at du med venstre hånd, holder under bidet. <br>
        Hvis hesten ikke selv åbner munden, kan du med din tommelfinger på venstre hånd stikke den ind og kilde hesten i mundvigen. Hesten har ingen tænder der hvor bidet ligger. Når bidet er i munden, tager du roligt hestens ene øre fremad, og kommer nakkestykket over, og derefter tager du det andet øre fremad. <br> Hvis der er næsebånd på, kommer den indenfor kæbestykkerne så næsebåndet ikke presser på. <br>
        Når det er gjort kan vi begynde at spænde hovedtøjet. Når du spænder hovedtøjet er det nedefra og op. Så du starter med næsebåndet, derefter kæberemmen. Der skal ca. være en tommelfinger mellem hesten og næsebåndet. Og der skal være nok plads ved kæberemmen til at hesten kan åbne munden.
        <br>
        Du har nu sadlet hesten op.
        </p>

        <h2>Nedsadling af hesten</h2>
        <h3>Aftagning af hovedtøj</h3>
        <p>Processen er næsten den samme, som at sadle hesten op. Vi starter med at spænde den fast. <br>
            <h4>Fastspænding af hesten</h4>
          Når du skal spænde hesten fast, er det samme princip som da du skulle sadle op. Der er to metoder:
          <br>
        1. Du tager hovedtøjet af først
        <br>
        eller
        <br>
        2. Du tager grimen på inden du tager hovedtøjet af.
        <br>
        Vi holder os til nummer 2.
        <br>
        Du tager fat i grimen, og kommer hestens hoved igennem det største hul. Herefter kommer du den ned på halsen og spænder den fast i der firkantede ringe. Hesten er nu fastspændt.
        <br>
        <br>
            <h4>Sådan tager du hovedtøjet af</h4>
            Når du har fastbundet hesten kan vi tage hovedtøjet af. Her starter vi oppefra. Så vi starter med at spænde kæberemmen op og derefter spænder vi næsebåndet op. Tøjlerne tages derefter op til nakkestykket. Du tager nu fat i nakkestykket og tøjlerne og tager hovedtøjet af stille og roligt. <br>
            Inden du hænger det på plads tages grimen på igen. Inden du forlader hesten strigles den hvor saddel og gjord har ligget, og bidet skylles.       
        </p>
        <br>
        <h3>Aftagning af sadlen</h3>
        <p>Når du tager sadlen af hesten, er der ikke så meget at gøre. Hos Enggaarden, spænder vi gjorden op i begge sider og lægger den oven på sadlen.   <br>
        Når du har spændt gjorden op tager du fat foran sadlen, og på saddelryggen og tager den roligt af og hænger den på plads.
        <br>
        Hesten er afsadlet.
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
