<!---------------=======================================================
	
	Item	: Calculator
	
	About	: PHP Basic
	
--------------------------------------------------------------------------------------
I'm creating a basic PHP calculator that lets you enter two values and chose your operator then displays the answer.
Everything is working fine except index.html is outputting the answer to site.php.
--------------------------------------------------------------------------------------
	
	

                             G o o d L u c k

=========================================================  ------------------->

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
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];
    $ans = 0;

    if($op == "+"){
        $ans = $num1 + $num2;
    } elseif($op == "-"){
        $ans = $num1 - $num2; 
    } elseif($op == "*"){
        $ans = $num1 * $num2; 
    } elseif($op == "/"){
        $ans = $num1 / $num2; 
    } else {
        $ans = "Invalid Operator";
    }

    $_SESSION['anss'] = $ans;
    header("Location: index.php");

    ?>