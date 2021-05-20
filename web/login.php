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
?>


<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <title>Login | Enggaarden Skolen for Akademisk Ridekunst</title>
</head>
<body>
    <div id="app">
    <div class="container-fluid">
     <div class="row">
            <div class="col-12 signInHead">
                <h1>Log in</h1>
                <h3>To access the site you need to log in.</h3>
            </div>
        </div>
    
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="formLogin">
                    <div class="usernameIn">
                    <input type="text" name="username" v-model="username" id="username">&nbsp;&nbsp;Username 
                    </div>
                    <p v-if="username.length < 1" class="errorMessage">Your username needs to be over 2 characters long </p>
                    <br>
                    <div class="passwordIn">
                    <input type="text" name="password" v-model="password" id="password">&nbsp;&nbsp;Password 
                    </div>
                    <p v-if="password.length < 1" class="errorMessage">Your password needs to be over 2 characters long  </p>
                    <br>
                    <br>
                    <input type="submit" name="submit" value="Login" class="signInButton">
                </form>



          <div class="row">
         <div class="col-12">
        <a href="../index.html" class="backToFront">Return to frontpage</a>
        </div>
    </div>

     <div class="fyldeDiv4"></div>

         <div class="row wRow">
                <div class="col-12 wCol footerClass">
                    <div id="footer">
                        <p>This is a fictional site. I am in no way associated with either LucasArts or Disney.</p>

                        <h4>Eksamensprojekt af Sara Nikoline Schou Andreasen</h4>


                    </div>
                </div>
            </div>
</div>
</div>
        <!-- jQuery + Bootstrap + own JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="../work/javascript/main.js"></script>
</body>
</html>