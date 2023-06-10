<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Dice Values</title>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
    <h2>Page two</h2>
<?php
session_start();
//print_r ($_SESSION);

    if ($_SESSION['count']== 0 )  {
        $_SESSION['count'] =  $_SESSION['count']  + 1 ;

    } else {

        $_SESSION['count'] =  $_SESSION['count']  + 1 ;
        // add page 2 code here
    }

    $name = $_POST['name'];
    $cao = $_POST['cao'];
    $password1 = $_POST['password1'];
    print_r($_POST)








?>

<form action="Page2.php" method="post">
    <div><h3>Click to repeat dice scores until match match</h3></div>
    <input type="submit" name="roll" value="press to roll dice">
</form>
