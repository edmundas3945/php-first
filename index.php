<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
date_default_timezone_set('Europe/Vilnius');

//$page = $_SERVER['PHP_SELF'];
//$sec = "1";
//header("Refresh: $sec; url=$page");

$shootX = rand(1, 599);
$shootY = rand(1, 599);


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
            width: 600px;
            height: 600px;
            background-image: url("images/taikinys.png");
            background-size: cover;
            position: absolute;
            top: 390px;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            align-content: center;
            justify-content: center;
        }

        .center {

            transform: translate(-50%, -50%);
            width: 300px;
            height: 300px;
            background-color: red;
            top: 50%;
            left: 50%;
        }

        .shoot {
            width: 21px;
            height: 21px;
            position: absolute;
            top: <?php print $shootY ;?>px;
            left: <?php print $shootX;?>px;
            /*top: 504px;*/
            /*left: 300px;*/
            transform: translate(-50%, -50%);
        }

        .redLine1 {
            width: 100%;
            height: <?= $thicknessLine?>;
            top: 50%;
            left: -51%;
            transform: translate(0, -50%);
            background-color: red;
            position: absolute;
        }

        .redLine2 {
            height: 100%;
            width: <?= $thicknessLine?>;
            left: 50%;
            top: -1%;
            transform: translate(-50%, -50%);
            background-color: red;
            position: absolute;
        }

        .redLine3 {
            width: 100%;
            height: <?= $thicknessLine?>;
            top: 50%;
            left: 51%;
            transform: translate(0, -50%);
            background-color: red;
            position: absolute;
        }

        .redLine4 {
            height: 100%;
            width: <?= $thicknessLine?>;
            left: 50%;
            top: 50%;
            transform: translate(-50%, 0);
            background-color: red;
            position: absolute;
        }

        .title {
            display: flex;
            text-align: center;
            justify-content: center;
        }

        p {
            color: blue;
            margin: 0;
        }
    </style>
</head>
<body>


<div class="taikinys">

    <div class="shoot">
        <div class="redLine1"></div>
        <div class="redLine2"></div>
        <div class="redLine3"></div>
        <div class="redLine4"></div>
    </div>
</div>
<div class="title">surinkta tasku: <p>
        <?php if ($shootY > 177 && $shootY < 423 && $shootX > 177 && $shootX < 423): ?>
            <?= '10' ?>
        <?php elseif ($shootY > 96 && $shootY < 504 && $shootX > 96 && $shootX < 504): ?>
            <?= '5' ?>
        <?php elseif ($shootY > 0 && $shootY < 600 && $shootX > 0 && $shootX < 600): ?>
            <?= '1' ?>
        <?php endif ?>
    </p></div>


</body>
</html>