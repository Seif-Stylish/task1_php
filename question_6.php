<?php

if($_POST)
{
    if($_POST["comsumption"])
    {
        $ourConsumption = $_POST["comsumption"];

        $unit;

        if($ourConsumption <= 50)
        {
            $unit = 0.5;
        }
        else if($ourConsumption <= 150)
        {
            $unit = 0.75;
        }
        else if($ourConsumption <= 250)
        {
            $unit = 1.2;
        }
        else
        {
            $unit = 1.5;
        }

        $consumptionTimesUnits = $ourConsumption * $unit;

        $outputTimes20Percent = $consumptionTimesUnits * (20 / 100);

        $finalResult = $consumptionTimesUnits + $outputTimes20Percent;

        $message = "
        
        <div class='container bg-success p-3'>
        <ul>
            <li class='pt-2'>consumption: $ourConsumption</li>
            <li class='pt-2'>unit: $unit</li>
            <li class='pt-2'>additional surcharge: 20%</li>
            <li class='pt-2'>consumption x units: $consumptionTimesUnits</li>
            <li class='pt-2'>output x 20% = $outputTimes20Percent</li>
            <li class='pt-2'>final result: $finalResult (comsumption x units) + (output x 20%)</li>
        </ul>
        </div>


        ";
    }
}

?>


<html>
    <head>
        <title>question 6</title>

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
                    <input name="comsumption" type="number" class="form-control w-100" placeholder="Enter your comsumption">
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