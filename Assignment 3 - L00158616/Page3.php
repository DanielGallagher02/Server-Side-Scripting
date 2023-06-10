<h1>Page Three</h1>
<?php 
session_start();
    // need to display Name, CAO and password here
    $name = $_POST['name'];
    $cao = $_POST['cao'];
    $password1 = $_POST['password1'];
    print_r($_POST)
    // also need to show the image of the matching dice.

    ?>
    <p>The dice matched on = </p>;
    
    <?php
    
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    // write to file here
    $name = $_POST['name'];
    $cao = $_POST['cao'];
    $password1 = $_POST['password1'];
    fclose($myfile);