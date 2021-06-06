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

    <title>Staldsnak | Enggaarden Skolen for Akademisk Ridekunst</title>
</head>
<!-- Nedestående class til body gør at footeren bliver sidende i bunden af siden, ligemeget hvilket viewpoint man har, og hvor meget content der er-->
<body class="d-flex flex-column h-100">
    <!--Header include. Header fil ligger under inc -->
<?php include("inc/header.html");?>

<?php include("inc/profilheader.html");?>

<div class="container-fluid">

            <div class="row">
                <div class="col-12 text-center">
                    <h2>Velkommen til staldsnak!</h2>
                    <p>Dette forum kan bruges til at diskutere alle former for stladsnak.</p>
                </div>
            </div>

<form action="staldsnak.php" method="post">
    <?php
         //når man skal lave en connection til en database server, bruger man $conn, og så informationen om databasen, som kodeord og bruger, port, lokalhost
        $conn = new mysqli('localhost:3306', 'admin', 'admin', 'eng');
    ?>


        <?php
        //Vi undersøger om vi er førstebesøgende eller om vi har trykket på en knap på siden.
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                //Her laver vi vores read-knap. Den gør at hvis du søger på f.eks. et personID vil den finde værdien og liste den ud i formelen.
                //Virker
                if($_REQUEST['knap'] == "read"){
                    $personID = $_REQUEST['personID'];
                    if(is_numeric($personID)){}
                        $sql = $conn->prepare("select * from staldsnak where personID = ?");
                        //Vi sætter navne på vores parametre. Det skal være en integer, med variablen $personID.
                        $sql->bind_param("i", $personID);
                        $sql->execute();
                        $result = $sql->get_result();
                        $row = $result->fetch_assoc();
                        $personID = $row["personID"];
                        $navn = $row["navn"];
                        $besked = $row["besked"];
                    }
                
                //update - VIRKER
                if($_REQUEST['knap'] == "update"){
                    $personID = $_REQUEST['personID'];
                    $navn = $_REQUEST['navn'];
                    $besked = $_REQUEST['besked'];
                            if(is_numeric($personID)){
                            $sql = $conn->prepare("update staldsnak set navn = ?, besked = ? where personID = ?");
                            //Da vi har fem strings, og en integers, sætter vi parameteren som:
                            $sql->bind_param("ssi", $navn, $besked, $personID);
                            $sql->execute();
                        }
                }

                //Create - VIRKER
                      if($_REQUEST['knap'] == "create"){
                        $personID = $_REQUEST['personID'];
                        $navn = $_REQUEST['navn'];
                        $besked = $_REQUEST['besked'];
                            if(is_numeric($personID)){
                            $sql = $conn->prepare("insert into staldsnak (personID, navn, besked) values (?, ?, ?)");
                            $sql->bind_param("iss", $personID, $navn, $besked);
                            $sql->execute();
                        }
                }

                    //Delete - VIRKER
                     if($_REQUEST['knap'] == "delete"){
                        $personID = $_REQUEST['personID'];
                                if(is_numeric($personID)){
                                $sql = $conn->prepare("delete from staldsnak where personID = ?");
                                //Da vi kun har vores personID der er en integer, sætter vi bind_param til i.
                                $sql->bind_param("i", $personID);
                                $sql->execute();
                            }
                }

                            //Clear - VIRKER
                            if($_REQUEST['knap'] == "clear"){
                                $personID = " ";
                                $navn = " ";
                                $besked = " ";
                            }
                        }
            
        ?>



    <?php
    //Vi henter alt
        $sql = "select * from staldsnak";
        $result = $conn->query($sql);
        //Hvis man har gåseøjne inden i gåseøjne skal man væksle mellem dobbelt og enkelt
        


        echo '<table border="5" cellpadding="5">';
        echo "<tr>";
        echo "<th>personID</th>";
        echo "<th>navn</th>";
        echo "<th>besked</th>";
        echo "</tr>";

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row["personID"]."</td>";
                    echo "<td>".$row["navn"]."</td>";
                    echo "<td>".$row["besked"]."</td>";
                    echo "</tr>";
                }
            }else {
                echo "Der er på nuværende tidspunkt ingen beskeder i dette forum.";
            }

        echo "</table>";
    ?>


    <?php 
        //Vi lukker forbindelsen
        $conn->close();
    ?>

        <p>
        Besked nummer: <input type="text" name="personID" value="<?php echo isset($personID) ? $personID : ''?>" style="left: 100px; width: 200px;height: 22px;"> <br> <br>
        Dit navn: <input type="text" name="navn" value="<?php echo isset($navn) ? $navn : ''?>" style="left: 100px; width: 200px;height: 22px;"> <br> <br>
        Din besked: <input name="besked" value="<?php echo isset($besked) ? $besked : ''?>" style="left: 100px; width: 200px;height: 22px;"> </input>
        </p>

        <p>
            <input type="submit" name="knap" value="read" style="width: 80px">
            <input type="submit" name="knap" value="update" style="width: 80px">
            <input type="submit" name="knap" value="create" style="width: 80px">
            <input type="submit" name="knap" value="delete" style="width: 80px">
            <input type="submit" name="knap" value="clear" style="width: 80px">
        </p>

    </form>

<div class="row">
        <div class="col-12 text-center backToForum">

            <a href="forum.php">Tilbage til forumemner</a>

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
<!--<script src="../work/javascript/main.js"></script> -->
</html>

<?php
    }
        else 
    {
        header("location: login.php");
    }
?>
