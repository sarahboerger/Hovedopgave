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
    <title>Lav bruger | Enggaarden Skolen for Akademisk Ridekunst</title>
</head>
<body>
    
<div id="app">

     <div class="container-fluid">

        <div class="row">
            <div class="col-12 signInHead">
                <h1>Sign in</h1>
                <h3>To access the site you need an account. Create one below.</h3>
            </div>
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
            <input type="text" name="username" v-model="username">&nbsp;&nbsp;Username
            </div>
             <p v-if="username.length < 1" class="errorMessage">Your username needs to be over 2 characters long </p>
            <br>
            <div class="passwordChange">
            <input type="text" name="password" v-model="password">&nbsp;&nbsp;Password
            </div>
            <p v-if="password.length < 1" class="errorMessage">Your password needs to be over 2 characters long  </p>
            <br>
            <div class="nameChange">
            <input type="text" name="name" v-model="name">&nbsp;&nbsp;Name
            <p v-if="name.length < 1" class="errorMessage">Your name needs to be over 2 characters long.</p>
            <p v-else> Nok karakterer</p>
            </div>
            <br/>
            <br/>
            <input type="submit" name="submit" value="Register" class="signInButton">
        </form> 
   


     <div class="row">
         <div class="col-12">
        <a href="../index.html" class="backToFront">Return to frontpage</a>
        </div>
    </div>


    <div class="fyldeDiv3"></div>

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