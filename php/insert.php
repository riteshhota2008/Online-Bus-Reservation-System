
<?php
require("config.php");
if(isset($_POST["submit"])){


    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=databasename",$username,$password);//replace only dbname with actual database name

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
        $sql = "INSERT INTO Bus_reservation (bus,travel_date,travel_month,travel_type,travel_from,travel_to,root,mob,mob_verify,BX_NAME,BX_age,BX_gender,BX_birth)
VALUES ('".$_POST["bus"]."','".$_POST["travel_date"]."','".$_POST["travel_month"]."','".$_POST["travel_type"]."','".$_POST["travel_from"]."','".$_POST["travel_to"]."','".$_POST["root"]."','".$_POST["mob"]."','".$_POST["mob_verify"]."','".$_POST["BX_NAME"]."','".$_POST["BX_age"]."','".$_POST["BX_gender"]."','".$_POST["BX_birth"]."')";
        if ($dbh->query($sql)) {
            header("Location: ../process.php");
        }
        else{
            header("Location: ../process.php");
        }

        $dbh = null;
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

}
?>

