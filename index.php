<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
date_default_timezone_set ('Europe/Vilnius');

//$page = $_SERVER['PHP_SELF'];
//$sec = "1";
//header("Refresh: $sec; url=$page");

//$day1 = rand(0,5);
//$day2 = rand(0,5);
//$day3 = rand(0,5);
//$day4 = rand(3,7);
//$day5 = rand(5,15);
//$day6 = rand(2,4);
//$day7 = rand(0,2);
$month = 0;
$dalmuo = 0;

for($m = 1; $m <= 4; $m++){
    $day1 = rand(0,5);
    $day2 = rand(0,5);
    $day3 = rand(0,5);
    $day4 = rand(3,7);
    $day5 = rand(5,15);
    $day6 = rand(2,4);
    $day7 = rand(0,2);

    $week = $day1 + $day2 +$day3 + $day4 + $day5 + $day6 + $day7;
    $month += $week;
}
$modalOfMonth = $month % 20;
$dalmuo = ($month - $modalOfMonth)/ 20;


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boom in <?php print 60-date("s") ;?></title>
    <style>
        .center {
            display: flex;
            flex-wrap: wrap;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            position: fixed;
        }
        .topic {
            width: 100%;
        }
    </style>
</head>
<body style="display: flex; text-align: center">

<div class="center">
    <div class="topic">
        <h3>vidutiniškai buteliukų išgeria per savaitę: <?php print $month ;?></h3>
        <h5>modal <?php print $modalOfMonth ;?></h3></h5>
        <h5>dalmuo <?php print $dalmuo ;?></h5>
    </div>

    <?php for($x = 0; $x <= $dalmuo; $x++) {
        print '<div><img src="images/deze.jpg" width="120px" alt=""></div>';
    };?>
    <?php for($x = 0; $x <= $modalOfMonth; $x++) {
        if ($x == 0){
            null;
        }else{
            print '<div><img src="images/corona.jpg" width="120px" alt=""></div>';
        }

    };?>


</div>



</body>
</html>