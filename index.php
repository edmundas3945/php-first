<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
date_default_timezone_set('Europe/Vilnius');

//$page = $_SERVER['PHP_SELF'];
//$sec = "1";
//header("Refresh: $sec; url=$page");

$shootX = rand(1,499);
$shootY = rand(1,499);
$targetX = rand(1,499);
$targetY = rand(1,499);
$paklaidaX = $shootX - $targetX;
$paklaidaY = $shootY - $targetY;

$thicknessLine = '3px'

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
        .taikinys {
            width: 500px;
            height: 500px;
            background-color: cadetblue;
            border-radius: 50%;
            position: absolute;
            top: 390px;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
        }
        .target{
            width: 21px;
            height: 21px;
            position: absolute;
            top: <?php print $targetY ;?>px;
            left: <?php print $targetX ;?>px;
            transform: translate(-50%, -50%);
        }
        .line1 {
            width: 100%;
            height: <?= $thicknessLine?>;
            top: 50%;
            left: -51%;
            transform: translate(0,-50%);
            background-color: lawngreen;
            position: absolute;
        }
        .line2{
            height: 100%;
            width: <?= $thicknessLine?>;
            left: 50%;
            top: -1%;
            transform: translate(-50%,-50%);
            background-color: lawngreen;
            position: absolute;
        }
        .line3 {
            width: 100%;
            height: <?= $thicknessLine?>;
            top: 50%;
            left: 51%;
            transform: translate(0,-50%);
            background-color: lawngreen;
            position: absolute;
        }
        .line4{
            height: 100%;
            width: <?= $thicknessLine?>;
            left: 50%;
            top: 50%;
            transform: translate(-50%,0);
            background-color: lawngreen;
            position: absolute;
        }
        .shoot{
            width: 21px;
            height: 21px;
            position: absolute;
            top: <?php print $shootY ;?>px;
            left: <?php print $shootX;?>px;
            transform: translate(-50%, -50%);
        }
        .redLine1 {
            width: 100%;
            height: <?= $thicknessLine?>;
            top: 50%;
            left: -51%;
            transform: translate(0,-50%);
            background-color: red;
            position: absolute;
        }
        .redLine2{
            height: 100%;
            width: <?= $thicknessLine?>;
            left: 50%;
            top: -1%;
            transform: translate(-50%,-50%);
            background-color: red;
            position: absolute;
        }
        .redLine3 {
            width: 100%;
            height: <?= $thicknessLine?>;
            top: 50%;
            left: 51%;
            transform: translate(0,-50%);
            background-color: red;
            position: absolute;
        }
        .redLine4{
            height: 100%;
            width: <?= $thicknessLine?>;
            left: 50%;
            top: 50%;
            transform: translate(-50%,0);
            background-color: red;
            position: absolute;
        }
        .title {
            display: flex;
            text-align: center;
            justify-content: center;
        }
        p{
            color: blue;
            margin: 0;
        }
    </style>
</head>
<body>


<div class="taikinys">
    <div class="target">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
        <div class="line4"></div>
    </div>
    <div class="shoot">
        <div class="redLine1"></div>
        <div class="redLine2"></div>
        <div class="redLine3"></div>
        <div class="redLine4"></div>
    </div>
</div>
<div class="title">mistake x:<p><?= abs($paklaidaX);?></p>,  y:<p><?= abs($paklaidaY);?></p></div>
<div> target coordinates x: <?= $targetX;?>, y: <?= $targetY;?></div>
<div> shoot coordinates x: <?= $shootX;?>, y: <?= $shootY;?></div>




</body>
</html>