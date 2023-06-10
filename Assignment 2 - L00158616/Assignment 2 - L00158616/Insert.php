
<?php
  $lines = file("counter.txt");
    foreach ($lines as $line) {
      $line = $line + 1;   
     } 
  file_put_contents("counter.txt", $line); 
  //print_r($_POST);

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
    echo 'The id of the movie is = ' . $line . '<br>';
    $myQuery = "INSERT INTO movies VALUES ( '$line', '$MovieName', '$MovieStart', '$MovieLength', '$DateReleased', '$Director', '$Genre')";
  
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
