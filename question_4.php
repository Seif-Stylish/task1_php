<?php

if($_POST)
{
    $ourNumber = $_POST["number"];

    $numberType = "";

    if($ourNumber)
    {
        if($ourNumber % 2 == 0)
        {
            $numberType = "even";
        }
        else
        {
            $numberType = "odd";
        }
    }

    if($numberType)
    {
        $message = "<h2>this number is $numberType</h2>";
    }
}


?>


<html>
    <head>
        <title>question 4</title>

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
                    <input name="number" type="number" class="form-control w-100" placeholder="Enter your number">
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