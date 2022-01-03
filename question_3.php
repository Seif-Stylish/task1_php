<?php

if($_POST)
{
    /*
    $ourNumber = $_POST["number"];
    $ourResult;
    for($i = 0; ; $i++)
    {
        if($i * $i == $ourNumber)
        {
            $ourResult = $i;
            break;
        }

        if($i * $i > $ourNumber)
        {
            break;
        }
    }
    */

    $ourNumber = $_POST["number"];
    $ourRoot = $_POST["root"];
    $ourResult = "";
    for($i = 0; ; $i++)
    {
        $product = 1;
        for($x = 1; $x <= $ourRoot; $x++)
        {
            $product *= $i;
        }


        if($product == $ourNumber)
        {
            $ourResult = $i;
            break;
        }

        if($product > $ourNumber)
        {
            break;
        }
    }

    if($ourNumber && $ourRoot)
    {
        if($ourResult)
        {
            $message = "<h2>root of $ourNumber = $ourResult</h2>";
        }
        else
        {
            $message = "<h2>$ourNumber to the root $ourRoot does not exist</h2>";
        }
    }
}

?>

<html>
    <head>
        <title>question 3</title>

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
                    <input name="number" type="number" class="form-control w-100" placeholder="Number">
                </div>
            </div>

            <div class="col-xl-12">
                <div class="p-3">
                    <input name="root" type="number" class="form-control w-100" placeholder="Root">
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