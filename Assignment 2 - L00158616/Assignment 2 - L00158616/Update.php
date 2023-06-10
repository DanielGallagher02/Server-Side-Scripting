<?php
    $MovieName = $_POST["MovieName"];
    $MovieStart = $_POST["MovieStart"];
    $MovieLength = $_POST["MovieLength"];
    $DateReleased = $_POST["DateReleased"];
    $Director = $_POST["Director"];
    $Genre = $_POST["Genre"];

    //make the database connection
    $conn = mysqli_connect("localhost", "root", "", "cinemadb");
    // Check connection
    if (!$conn) {
    die("Connection failed: ");
    } else {
    echo "Connected successfully<br>";
    //$myQuery = "INSERT INTO cinemadb VALUES ('$MovieName', '$MovieStart', '$MovieLength', '$DateReleased', '$Director', '$Genre')";
    $myQuery = "UPDATE movies SET ('MovieName = $MovieName', 'MovieStart = $MovieStart', 'MovieLength = $MovieLength', 
                                    'DateReleased = $DateReleased', 'Director = $Director', 'Genre = $Genre',
                                    WHERE 'MovieName = $MovieName', 'MovieStart = $MovieStart', 'MovieLength = $MovieLength', 
                                    'DateReleased = $DateReleased', 'Director = $Director', 'Genre = $Genre')";

    $result = mysqli_query($conn, $myQuery);
    if($result) {
    echo 'OK <h1> record inserted</h1>';
    } else {
    echo 'No insertion made' . $line;
    }
   /* close connection */
     mysqli_close($conn);
     header("Location: CA2.php"); 
    }
    ?>

?>