<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
date_default_timezone_set('Europe/Vilnius');

//$page = $_SERVER['PHP_SELF'];
//$sec = "1";
//header("Refresh: $sec; url=$page");

$distance = rand(0,999);
$consumption = 7.5 ;
$price = 1.2 ;

$fuel_consumed = $distance/100*$consumption;
$totalPrice = $price * $fuel_consumed;


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
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        img {
            width: 21px;
        }

        .card {
            display: flex;
            justify-content: center;
            flex-direction: column;
            background-color: darkmagenta;
            border-radius: 15px;
            padding: 15px;
            text-align: center;
            width: 350px;
            margin: 9px;
        }
    </style>
</head>
<body>

<h1>Trip calculator</h1>
<ul>
    <li>distance we made: <strong><?php print $distance ;?></strong></li>
    <li>fuel consumed: <strong><?php print $fuel_consumed ?></strong></li>
    <li>total price of trip: <strong><?php print $totalPrice ?></strong></li>
</ul>

</body>
</html>