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


$thicknessLine = '3px';
print pow(9,2)
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
            background-image: url("images/taikinysApskritas.png");
            background-size: cover;
            position: absolute;
            top: 390px;
            left: 50%;
            border-radius: 50%;
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
            /*top: 573px;*/
            /*left: 300px;*/
            transform: translate(-50%, -50%);
        }

        .redLine1 {
            width: 100%;
            height: <?= $thicknessLine?>;
            top: 50%;
            left: -51%;
            transform: translate(0, -50%);
            background-color: lawngreen;
            position: absolute;
        }

        .redLine2 {
            height: 100%;
            width: <?= $thicknessLine?>;
            left: 50%;
            top: -1%;
            transform: translate(-50%, -50%);
            background-color: lawngreen;
            position: absolute;
        }

        .redLine3 {
            width: 100%;
            height: <?= $thicknessLine?>;
            top: 50%;
            left: 51%;
            transform: translate(0, -50%);
            background-color: lawngreen;
            position: absolute;
        }

        .redLine4 {
            height: 100%;
            width: <?= $thicknessLine?>;
            left: 50%;
            top: 50%;
            transform: translate(-50%, 0);
            background-color: lawngreen;
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
        <?php if (pow($shootY - 300,2) + pow($shootX - 300,2) < pow(54,2)): ?>
            <?= '5' ?>
        <?php elseif (pow($shootY - 300,2) + pow($shootX - 300,2) < pow(120,2)): ?>
            <?= '4' ?>
        <?php elseif (pow($shootY - 300,2) + pow($shootX - 300,2) < pow(174,2)): ?>
            <?= '3' ?>
        <?php elseif (pow($shootY - 300,2) + pow($shootX - 300,2) < pow(228,2)): ?>
            <?= '2' ?>
        <?php elseif (pow($shootY - 300,2) + pow($shootX - 300,2) < pow(273,2)): ?>
            <?= '1' ?>
        <?php else: ?>
            <?= '0' ?>
        <?php endif ?>
    </p></div>


</body>
</html>