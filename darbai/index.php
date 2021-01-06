<?php

$pcRand1 = rand(1, 11);
$pcRand2 = rand(1, 11);

$meRand1 = rand(1, 11);
$meRand2 = rand(1, 11);

$pc = $pcRand1 + $pcRand2;
$me = $meRand2 + $meRand1;

$winner = '';
$winnerColor = '';

if ($pc > $me) {
    $winner = "pc with $pc points";
    $winnerColor = 'tomato';
}
if ($me > $pc) {
    $winner = "me with $me points";
    $winnerColor = 'green';
}if ($me == $pc){
    $winner = "no one, it's equal";
    $winnerColor = 'silver';
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dices</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
<div class="mainBox">
    <div class="pc">
        <div>pc:</div>
        <div class="biggerBox">
            <div class="box"><?php print $pcRand1; ?></div>
            <div class="box"><?php print $pcRand2; ?></div>
        </div>
        <div>score:<?php print $pc ?></div>

    </div>
    <div class="me">
        <div>me:</div>
        <div class="biggerBox">
            <div class="box"><?php print $meRand1; ?></div>
            <div class="box"><?php print $meRand2; ?></div>
        </div>
        <div>score:<?php print $me ?></div>
    </div>
</div>

<div class="winner" style="background-color: <?= $winnerColor ?>">
    Winner is <?php print $winner ?> points
</div>


</body>
</html>