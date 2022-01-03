<?php

if($_POST)
{
    $physics = $_POST["physics"];
    $chemistry = $_POST["chemistry"];
    $biology = $_POST["biology"];
    $math = $_POST["math"];
    $computer = $_POST["computer"];

    $allMarks = [$physics , $chemistry , $biology , $math , $computer];

    $flag = 1;

    for($x = 0; $x < count($allMarks); $x++)
    {
        if(!$allMarks[$x])
        {
            $flag = 0;
            break;
        }
    }

    if($flag == 1)
    {

        $sumOfAllMarks = 0;

        for($i = 0; $i < count($allMarks); $i++)
        {
            $sumOfAllMarks += $allMarks[$i];
        }

        $averageOfAllMarks = $sumOfAllMarks / 250;

        $percentageOfAllMarks = $averageOfAllMarks * 100;

        $studentGrade = "";

        if($percentageOfAllMarks >= 90 && $percentageOfAllMarks <=100)
        {
            $studentGrade = "A";
        }

        else if($percentageOfAllMarks >= 80)
        {
            $studentGrade = "B";
        }
        
        else if($percentageOfAllMarks >= 70)
        {
            $studentGrade = "C";
        }
        
        else if($percentageOfAllMarks >= 60)
        {
            $studentGrade = "D";
        }

        else if($percentageOfAllMarks >= 40)
        {
            $studentGrade = "E";
        }

        else
        {
            $studentGrade = "F";
        }
        
        


        $message = "<h2>grade = $studentGrade</h2>";

    }


}

?>


<html>
    <head>
        <title>question 5</title>

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
                    <input name="physics" type="number" class="form-control w-100" placeholder="Physics">
                </div>
            </div>

            <div class="col-xl-12">
                <div class="p-3">
                    <input name="chemistry" type="number" class="form-control w-100" placeholder="Chemistry">
                </div>
            </div>

            <div class="col-xl-12">
                <div class="p-3">
                    <input name="biology" type="number" class="form-control w-100" placeholder="Biology">
                </div>
            </div>

            <div class="col-xl-12">
                <div class="p-3">
                    <input name="math" type="number" class="form-control w-100" placeholder="Math">
                </div>
            </div>

            <div class="col-xl-12">
                <div class="p-3">
                    <input name="computer" type="number" class="form-control w-100" placeholder="Computer">
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