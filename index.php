<?php error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);;?>
<?php date_default_timezone_set ('Europe/Vilnius');?>
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "1";
header("Refresh: $sec; url=$page");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Be aware</title>
    <style>
        .center {
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            position: fixed;
        }
    </style>
</head>
<body style="display: flex; text-align: center">
<div style="width: 100%; padding: 15px; background-color: rgb(<?php print rand(0,255) . ' ' . rand(0,255) . ',' . rand(0,255);?>)">
        Time left: <?php print 60-date("s") ;?>
</div>
<div class="center">
    <img src="
    <?php
    if(date('s') == 00){
        print 'https://media.giphy.com/media/3o7TKzyIPAiMR1pErK/giphy.gif';
    }else {
        print 'https://images.creativemarket.com/0.1.0/ps/5311453/300/200/m2/fpnw/wm0/tet6q2n0qzr42t5rohv86xbzxkzoidgndmnslr9jwx7emozfhbw230tr0472wkrv-.jpg?1541314609&s=a194fff2d6f8a45b7a19568fd3c9aeb2';
    }
    ?>
"
         style="width: <?php
         if(date('s') == 00){
             print '60';
             }else{
             print date('s');
            }
            ;?>0px" alt="">
    <?php print '' ;?>
</div>



</body>
</html>