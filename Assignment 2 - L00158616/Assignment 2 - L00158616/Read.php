<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CA2.css">
  </head>
  <style>  
    body {background-color: coral;}  
  </style>  
  <body>


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
        $myQuery = "SELECT * FROM movies WHERE ID = $ID";  
	    

        /* close connection */
        mysqli_close($conn);
        //header("Location: CA2.php"); 
    }

?>
   <form action="CA2.php">
      <button type="submit" class="btn btn-primary">Cinema DB</button>
    </form>



</body>
</html>