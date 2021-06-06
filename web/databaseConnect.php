<?php
    //$conn = new mysqli('sarasandreasen.dk.mysql:3306', 'sarasandreasen_dkeng', 'engrideskole123', 'sarasandreasen_dkeng');
 $conn = new mysqli('localhost:3306', 'admin', 'admin', 'eng');


    if($conn->connect_error)
    {
        echo "Failed to connect to MySQL : " . $conn->connect_error . " (" . $conn->connect_errno . ")";
        exit(); 
    }
    $conn->set_charset("utf8");
?> 