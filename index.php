<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
date_default_timezone_set('Europe/Vilnius');

//$page = $_SERVER['PHP_SELF'];
//$sec = "1";
//header("Refresh: $sec; url=$page");

$when = ['early and ', 'late and '];
$drinks = ['sober', 'drunk'];
$cameHome = $when[rand(0, 1)] . $drinks[rand(0, 1)];

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
            justify-content: center;
        }
        img {
            width: 210px;
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

<h1>came home <?= $cameHome ?></h1>

<div>
    <?php if ($cameHome == 'early and sober'): ?>
    <?= '<img src="images/happyWife.png" alt="">' ?>
        <h3><?= 'sleep with wife' ?></h3>
    <?php elseif ($cameHome == 'late and sober') :?>
    <?= '<img src="images/happyWife.png" alt="">' ?>
        <h3><?= 'sleep with wife' ?></h3>
    <?php elseif ($cameHome == 'late and drunk') :?>
    <?= '<img src="images/angryWife.png" alt="">' ?>
        <h3><?= 'sleep on couch' ?></h3>
    <?php elseif ($cameHome == 'early and drunk') :?>
    <?= '<img src="images/angryWife.png" alt="">' ?>
        <h3><?= 'sleep on couch' ?></h3>
    <?php endif;?>
</div>




</body>
</html>