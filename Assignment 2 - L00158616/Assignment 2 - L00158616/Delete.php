<?php
    $ID = $_POST["ID"];

    //make the database connection
    $conn = mysqli_connect("localhost", "root", "", "cinemadb");
    // Check connection
    if (!$conn) {
    die("Connection failed: ");
    }
    else 
    {
        echo "Connected successfully<br>";
        //print_r($_POST);
        $myQuery = "DELETE FROM 'movies' WHERE 'movies'.'ID' = '" . $ID . "';";  
	    //"DELETE FROM `movies` WHERE `movies`.`ID` = '" . $ID . "';";

        /* close connection */
        mysqli_close($conn);
        header("Location: CA2.php"); 
    }


?>