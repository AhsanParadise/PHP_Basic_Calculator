<!---------------=======================================================
	
	Item	: Calculator
	
	About	: PHP Basic
	
--------------------------------------------------------------------------------------
I'm creating a basic PHP calculator that lets you enter two values and chose your operator then displays the answer.
Everything is working fine except index.html is outputting the answer to site.php.
--------------------------------------------------------------------------------------
	
	

                             G o o d L u c k

=========================================================  ------------------->





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Answer is</title>
    <style>
        body {
        background-color: bisque;
        border: 20px solid #333;
        margin-top: 250px;
        font-size: 170px;
        text-align: center;
        font-family: Impact, Haettenschweiler, sans-serif;
        animation: drop 4.0s ease; /* Make things beautiful */
        color: #333;
        cursor: pointer;
        
    }
    body:hover {
            color: red;
            animation: shake 3.5s;
            animation-iteration-count: infinite;
        }

        @keyframes shake {
            0% {
                transform: translate(1px, 1px) rotate(0deg);
            }

            10% {
                transform: translate(-1px, -2px) rotate(-1deg);
            }

            20% {
                transform: translate(-3px, 0px) rotate(1deg);
            }

            30% {
                transform: translate(3px, 2px) rotate(0deg);
            }

            40% {
                transform: translate(1px, -1px) rotate(1deg);
            }

            50% {
                transform: translate(-1px, 2px) rotate(-1deg);
            }

            60% {
                transform: translate(-3px, 1px) rotate(0deg);
            }

            70% {
                transform: translate(3px, 1px) rotate(-1deg);
            }

            80% {
                transform: translate(-1px, -1px) rotate(1deg);
            }

            90% {
                transform: translate(1px, 2px) rotate(0deg);
            }

            100% {
                transform: translate(1px, -2px) rotate(-1deg);
            }
        }





    @keyframes drop {
    0% {
      opacity: 0;
      transform: translateY(-80px);
    }
    100% {
      opacity: 1;
      transform: translateY(0px);
    }



body {
    background-image: url();
        background-size: cover;
        margin:0px;
        font-size: 5px;
        text-align: center;
        font-family: Impact, Haettenschweiler, sans-serif;
        
        color: white;
        opacity: .75;
}

}
  }
    </style>
</head>

<body>




<!--======== I M P O R T A N T   P A R T ============ */-->
    <?php

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if($op == "+"){
        echo $num1 + $num2;
    } elseif($op == "-"){
        echo $num1 - $num2; 
    } elseif($op == "*"){
        echo $num1 * $num2; 
    } elseif($op == "/"){
        echo $num1 / $num2; 
    } else {
        echo "Invalid Operator";
    }

    ?>



</body>
</html>
