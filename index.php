<?php
function is_session_started()
{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
}

// Example
if ( is_session_started() === FALSE ) session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!---html for PHP-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator !</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if(isset($_SESSION['anss'])){
        echo '<div> <h1>Your answer is: '. $_SESSION['anss'] .'</h1> 
        <form action="handle.php" method="post"><input type="submit" value="Done"></form>
        <div>';
        
        echo '<div></div>';
    }
    
    else{
        echo '<div>
        <img src="img/Calculator.png" width="150px" alt="Calculator">
        <form action="site.php" method="post">

            <input type="number" name="num1" placeholder="First Number"> <br>
            <input type="textbox" name="op" placeholder=" +  -  *  / "> <br>
            <input type="number" name="num2" placeholder="Second Number"> <br>
            <input type="submit" value="Done">
        </form>
    </div>';
    }
    ?>

    <footer>
         Copyright © 2020 - All rights Reserved - Designed by AhsanParadise
    </footer>
</body>

</html>

