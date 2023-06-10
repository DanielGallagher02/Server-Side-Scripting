<?php 
 session_start();

  $_SESSION['count'] = 0;
 // print_r ($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Currency Convertor</title>
	<link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
    
        $err1 = "Error - name with numbers";
        $err2 = "\nError - CAO must start with L";
        $err3 = "Error - passwords are not the same";
       // print_r ($_POST);

        
        // if the user has entered an name with less than three characters
        // or a numeric value display a warning message to the user.
        // If the CAO does not start with the Letter L followed by 
        // eight digits flag an error.
        
        #NAME 
        if(isset($_POST['name'])) 
        {
            if (!preg_match ("/^[a-zA-z]*$/", 'name') ) 
            {
                if(strlen($_POST['name']) < 3)
                {

                }
                else
                {
                    #if its less than 3
                    echo $err1;
                }

            } 
            else 
            {  
                //shows if it has numbers or something else
                echo $err1;
            }  

        } 
        else 
        {
            // not set
            echo $err1; 
        }

        #CAO 
        if(isset($_POST['cao']))
        {
            if($_POST['cao'] <= 9)
            {
                if($_POST['cao'][0] == "L")
                {

                }
                else
                {
                    #if it dosent start with L
                    echo $err2;
                }
            }
            else
            {
                #if its not less than 9 characters long 
                echo $err2;
            }
        }
        else
        {
            #if its empty 
            echo $err2;
        }

        #Passwords
        //if($_POST['password1'] == $_POST['password2'])
        //{

        //}
        //else
        //{
            // echo $err3
        //}
       
    ?>

	<h1>CA3 class test Page 1</h1>

    <form action="Page2.php" method="post">

        <table>
            <tr><td>Name: </td>
            <td><input type="text" name="name" value="<?php  ?>"> </td>
            <td id="error1"> <?php echo $err1;?></td></tr>

            <tr><td>CAO:</td><td><input type="text" name="cao" value="<?php  ?>">
            </td><td id="error2">
            <?php echo $err2;?>
            </td></tr>   
            </td></tr>
            <tr><td>Password 1:</td><td><input type="password" name="password1"/></td><td id="error3">
              <?php echo $err3; ?>  
            </td></tr>
            <tr><td>Password 2:</td><td><input type="password" name="password2"/></td></tr>
            <tr><td><label >Number of dice to roll:</label></td><td>
                <input type="radio" id="two" value="two" name="dice" checked> 
                <label for="two">Two</label>
		        <input type="radio" id="three" value="three" name="dice">
                <label for="three">Three</label>
            </td></tr>
            <tr><td align="center"><input type="submit" name="play" value="Roll the dice">
            </td></tr>
        </table>

    </form>
            
    <hr>


</body>

</html>