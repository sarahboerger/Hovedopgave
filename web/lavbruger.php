<!DOCTYPE html>
<!-- class="h-100" = Vi giver besked på at den skal være 100% i størrelse-->
<html class="h-100" lang="da">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Enggaarden Skolen for Akademisk Ridekunst, er en rideskole der vægter veldfærdet af både rytter og hest højt.">
  <meta name="keywords" content="Enggaarden,Rideskole,Enggaarden Skolen for Akademisk Ridekunst,Akademisk Ridekunst">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/9cb253356d.js" crossorigin="anonymous"></script>

    <title>Lav profil | Enggaarden Skolen for Akademisk Ridekunst</title>
</head>
<!-- Nedestående class til body gør at footeren bliver sidende i bunden af siden, ligemeget hvilket viewpoint man har, og hvor meget content der er-->
<body class="d-flex flex-column h-100">
    <!--Header include. Header fil ligger under inc -->
<?php include("inc/header.html");?>
<div id="app">
<div class="container-fluid">

  <div class="row">
            <div class="col-12 undervisningsvideo">
                <h1>Lav bruger</h1>
            </div>
</div>
     <div class="row">

        <div class="col-0 col-lg-2"></div>
        <div class="col-12 col-lg-8">
     <p>Venligst bemærk at det kun er elever der går på Enggaarden der vil blive bekræftet. Du bekræftes på dit telefonummer. Hvis du stadig ikke kan logge ind efter et par dage, bedes du skrive til Sandra, at du har ændret dit telefonnummer og derefter prøve igen.</p>
        </div>
        <div class="col-0 col-lg-2"></div>
        </div>


   <?php 
    // Registration form
    if(isset($_POST['submit']))
    {
        require_once('databaseConnect.php');
        // remove special characters
        // adding basic security (mysqli_real_escape_string) to avoid SQL injection (' or 0=0 #)
        $username = $conn->real_escape_string($_POST['username']);
        $password = sha1($_POST['password']);
        $name = $conn->real_escape_string($_POST['name']);
        // check if username exist, else insert
        $check = $conn->query("SELECT username from user WHERE username = '$username' LIMIT 1");
        if ($check->num_rows == 1) echo '<div class="userRegi"><p>Username already exists!</p> </div>';
        else 
        {
            $insert = "INSERT INTO user (id, username, password, name) VALUES (NULL, '$username', '$password', '$name')";
            if($conn->query($insert))
            {
                echo '<div class="userRegi"> New user with name = "' . $name . '" registered! </div>';
            }
            else
            {
                echo '<div class="userRegi">Something went wrong </div>';
            }
        }
        $conn->close();
    }
?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="usernameChange">
            <input type="text" name="username" v-model="username">&nbsp;&nbsp;Telfonnummer
            </div>
             <p v-if="username.length < 2" class="errorMessage">Dit telefonnummer skal være over 2 numre langt </p>
             <p v-else-if="username.length == 9" class="errorMessage">Et telefonnummer er kun på 8 tal</p>
            <br>
            <div class="passwordChange">
            <input type="text" name="password" v-model="password">&nbsp;&nbsp;Kodeord
            </div>
            <p v-if="password.length < 2" class="errorMessage">Dit kodeord skal være over 2 bogstaver langt</p>
            <br>
            <div class="nameChange">
            <input type="text" name="name" v-model="name">&nbsp;&nbsp;Navn
            <p v-if="name.length < 2" class="errorMessage">Dit navn skal være over 2 bogstaver langt</p>
            </div>
            <br/>
            <br/>
            <input type="submit" name="submit" value="Lav bruger" class="signInButton">
        </form> 


     <div class="row">
         <div class="col-12">
        <a href="login.php" class="backToFront">Gå til login</a>
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
    <script src="../work/javascript/main.js"></script>
</html>