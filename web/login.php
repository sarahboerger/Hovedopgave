<?php
    // Login form prøv at sæt i top
    if (isset($_POST['submit'])) {
        require_once("databaseConnect.php");
        
        $username = $conn->real_escape_string($_POST['username']);
        $password = sha1($_POST['password']);
        $read = "SELECT * FROM user WHERE username = '$username' AND password = '$password' LIMIT 1";
        $result = $conn->query($read);
        $conn->close();
       
        if (!$result->num_rows == 1) 
        {
            echo "<p>Invalid username/password</p>";
        } 
        else            
        {
            
            session_start();
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
           
            header("Location: profil.php"); 
            exit();
            
        }
    }
         if( !empty($_SESSION['logged_in'] ) ){
        include("inc/profilheader.html");
        }
    
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
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/9cb253356d.js" crossorigin="anonymous"></script>

    <title>Login | Enggaarden Skolen for Akademisk Ridekunst</title>
</head>
<!-- Nedestående class til body gør at footeren bliver sidende i bunden af siden, ligemeget hvilket viewpoint man har, og hvor meget content der er-->
<body class="d-flex flex-column h-100">
    <!--Header include. Header fil ligger under inc -->
<?php include("inc/header.html");?>
<!-- ID app henviser til VUE javascript -->
<div id="app">
    <div class="container-fluid">

    <div class="row">

    <div class="col-12 undervisningsvideo">
        <h1>Login til din Enggaarden profil her</h1>
    </div>

    </div>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="formLogin">
                        <div class="usernameIn">
                            <input type="text" name="username" v-model="username" id="username">&nbsp;&nbsp;Telfonnummer 
                        </div>
                            <p v-if="username.length < 2" class="errorMessage">Dit telefonnummer skal være over 2 cifre langt. </p>
                            <p v-else-if="username.length > 9" class="errorMessage">Et telefonnummer er kun på 8 tal</p>
                        <br>
                        <div class="passwordIn">
                        <input type="text" name="password" v-model="password" id="password">&nbsp;&nbsp;Kodeord 
                        </div>
                            <p v-if="password.length < 2" class="errorMessage">Dit kodeord skal være over 2 bogstaver langt.  </p>
                        <br>
                        <br>
                        <input type="submit" name="submit" value="Login" class="signInButton">
                    </form>


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