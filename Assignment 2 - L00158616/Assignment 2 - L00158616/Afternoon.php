<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CA2.css">

</head>
<style>
    body {background-color: coral;}  
</style>  
<body>
    <h2>Cinema DB</h2>
<table>    
<?php
    //make the database connection
    $conn = mysqli_connect("localhost" , "root", "", "cinemadb");

    //check the connection to see it works
    if (!$conn)
    {
        die("Connection failed: ");
    }
    else
    {
        echo "Connected successfully<br>";
    }

    //"SELECT * FROM movies WHERE 'Movie Start' >= '15:00:00' AND 'Movie Start' <= '18:00:00' ";
    $sqlStatm = "SELECT * FROM movies WHERE 'Movie Start' BETWEEN '15:00:00' AND '18:00:00' ";
    // 
    $result = mysqli_query($conn, $sqlStatm);
    //
    $numOfRows = mysqli_num_rows($result);

    echo "You have " . $numOfRows . " Movies <br>";

    /* ($numOfRows > 0)
    {
        // Get field information for all fields
        while ($field = mysqli_fetch_field($result))
        {
            echo "<th>$field->name</th>";
        }
    }    
        echo '<br>';

    // loops through rows
    for ($i = 0; $i < $numOfRows; $i++)
    {
        //to show the data what is in each <th>
        $row = mysqli_fetch_array($result);
        echo "<tr><td>" .$row["ID"]. "</td><td>" .$row["Movie Name"]. "</td><td>" .$row["Movie Start"]. "</td><td>"
        .$row["Movie Length"]. "</td><td>" .$row["Date Released"]. "</td><td>" .$row["Director"]. "</td><td>" 
        .$row["Genre"]. "</td></tr>";
    }  
    */
?>
</table>   
    <form action="CA2.php">
    <button type="submit" class="btn btn-primary">Cinema DB</button>
    </form>
    
</body>
</html>  
