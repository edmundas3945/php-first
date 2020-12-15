<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
date_default_timezone_set('Europe/Vilnius');

//$page = $_SERVER['PHP_SELF'];
//$sec = "1";
//header("Refresh: $sec; url=$page");

$money = rand(1, 100);
$beerPrice = 4.5;
$trigger = true;

$beerHits = floor($money / $beerPrice);
$moneyLeft = $money - ($beerHits * $beerPrice);

$lost = 'Borat lost his wallet';
$notLost = 'Borat does not lost his wallet'

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
            width: 90px;
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

<h1>Students regular friday</h1>
<ul>
    <li>Borat had <strong><?= $money; ?></strong> cash</li>
    <li>So we hit <strong><?= $beerHits ?></strong> beers</li>
    <li>Borat back home with <strong><?= $moneyLeft ?></strong> money left</li>
    <li>
        <?php if ($beerHits < 10): ?>
            <?= 'no chance to lost wallet' ?>
            <?= '<img src="images/notlost.png" alt="">' ?>
        <?php endif; ?>
        <?php if ($beerHits >= 10): ?>
            <?php if (rand(1, 100) < 50): ?>
                <?= $lost ?>
                <?= '<img src="images/lostwallet.png" alt="">' ?>
            <?php else: ?>
                <?= $notLost ?>
                <?= '<img src="images/notlost.png" alt="">' ?>
            <?php endif; ?>
        <?php elseif ($beerHits >= 12): ?>
            <?php if (rand(1, 100) < 30): ?>
                <?= $lost ?>
                <?= '<img src="images/lostwallet.png" alt="">' ?>
            <?php else: ?>
                <?= $notLost ?>
                <?= '<img src="images/notlost.png" alt="">' ?>
            <?php endif; ?>
        <?php elseif ($beerHits > 15): ?>
            <?= $lost ?>
            <?= '<img src="images/lostwallet.png" alt="">' ?>
        <?php endif; ?>
    </li>
</ul>


</body>
</html>