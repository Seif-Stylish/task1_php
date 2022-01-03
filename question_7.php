<?php

if($_POST)
{
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $ourResult;

    $operator = $_POST["operator"];

    if($num1 && $num2)
        {

        switch($operator)
        {
            case "+":
            {
                $ourResult = $num1 + $num2;
                break;
            }
            case "-":
            {
                $ourResult = $num1 - $num2;
                break;
            }
            case "x":
            {
                $ourResult = $num1 * $num2;
                break;
            }
            default:
            {
                $ourResult = $num1 / $num2;
            }
        }

        $message = "<h2>$num1 $operator $num2 = $ourResult</h2>";
    }
}

?>


<html>
    <head>
        <title>question 7</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>

    <body>
        

    <div class="container p-5">
        <form class="bg-warning" method="post">
            <div class="col-xl-12">
                <div class="p-3">
                    <input name="num1" type="number" class="form-control w-100" placeholder="Enter your number">
                </div>
            </div>
            <div class="col-xl-12">
                <div class="p-3">
                    <input name="num2" type="number" class="form-control w-100" placeholder="Enter your number">
                </div>
            </div>
            <div class="col-xl-12">
                <div class="p-3">
                    <select name="operator">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="x">x</option>
                        <option value="/">/</option>
                    </select>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="p-3">
                    <button class="btn btn-primary">submit</button>
                </div>
            </div>
        </form>
        <?php if(isset($message)){echo $message;} ?>
    </div>


    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>