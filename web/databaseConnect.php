<?php
    //$conn = new mysqli('localhost:3306', 'admin', 'admin', 'eng');
    //Sarah du skal nok ændre i nedenstående så det passer til din localhost, samt lave en database der hedder eng.
 $conn = new mysqli('localhost:3306', 'admin', 'admin', 'eng');


    if($conn->connect_error)
    {
        echo "Failed to connect to MySQL : " . $conn->connect_error . " (" . $conn->connect_errno . ")";
        exit(); 
    }
    $conn->set_charset("utf8");
?> 