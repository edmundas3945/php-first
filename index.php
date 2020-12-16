<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
date_default_timezone_set('Europe/Vilnius');

//$page = $_SERVER['PHP_SELF'];
//$sec = "1";
//header("Refresh: $sec; url=$page");

$days = 365;
$cigs1to5day = rand(3,4);
$cigs6day = rand(10,20);
$cigs7day = rand(1,3);
$packPrice = 3.50;
$packSize = 20;
$cigsPerYear = ($cigs1to5day+$cigs6day+$cigs7day)*52;
$packsPerYear = $cigsPerYear/20;
$cigLikutis= $cigsPerYear%20;
$moneyPerYear = $packsPerYear*$packPrice;

$minutesPerCig = 5;
$minutesPerYear = $minutesPerCig * $cigsPerYear;
$hoursPerYear = $minutesPerYear/60;


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/42762d49f1.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body {
            position: relative;
            text-align: center;
        }
        img {
            width: 90px;
        }
    </style>
</head>
<body>

<h1>My smoke calculator</h1>
<h2><?php print $moneyPerYear ?> $ per year</h2>
<h2><?php print $hoursPerYear ?> hours per year</h2>
<div style="display: flex; flex-wrap: wrap">
    <?php for ($x =0 ; $x < floor($packsPerYear); $x++) :?>
    <?= '<div><img src="images/malboro.png" alt=""></div>' ?>
    <?php endfor;?>
</div>
<div style="display: flex; flex-wrap: wrap">
    <?php for ($x =0 ; $x < $cigLikutis; $x++) : ?>
        <?= '<div><img src="images/cig.jpg" alt=""></div>' ?>
    <?php endfor;?>
</div>


</body>
</html>