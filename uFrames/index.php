<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
date_default_timezone_set('Europe/Vilnius');

//$page = $_SERVER['PHP_SELF'];
//$sec = "1";
//header("Refresh: $sec; url=$page");

//if(empty($_POST['tipas']) || empty($_POST['vardas']) || empty($_POST['veisle'])){
//}

$conFirst = fopen("test.csv", 'r');
$totalFile = fgets($conFirst);
fclose($conFirst);

if (empty($totalFile)) {
    $conSecond = fopen("test.csv", "a");
    fwrite($conSecond, "Vardas,Pavarde,Amzius", "\r\n");
    fclose($conSecond);
} else {
    if (!empty($_POST['vardas']) && !empty($_POST['pavarde']) && !empty($_POST['amzius'])){
        $conSecond = fopen("test.csv", "a");
        fwrite($conSecond, $_POST['vardas'].','.$_POST['pavarde'].','.$_POST['amzius']);
        fclose($conSecond);
    }
}


$localRead = fopen("text.csv", 'r');
$stringas = fgets($localRead);
$stringas = substr_replace($stringas, '', -1);
fclose($localRead);


$newAnimal = explode('-', $stringas);
//var_dump($newAnimal);
$_POST = [];
foreach ($newAnimal as $item) {
    $animalArrays[] = explode(',', $item);
}
//var_dump($animalArrays);

$array = [
    [
        'tipas' => 'belenkoks',
        'vardas' => 'begemotas',
        'amzius' => '9',
        'veisle' => 'auksinis retriveris',
    ],
    [
        'tipas' => 'vovere',
        'vardas' => 'pusta uodega',
        'amzius' => '12',
        'veisle' => 'kiemsargis',
    ],
    [
        'tipas' => 'kralikas',
        'vardas' => 'speed runner 3000',
        'amzius' => '5',
        'veisle' => 'raketa',
    ]
];
$array = array_merge($array, $animalArrays);
var_dump($_POST);

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

        .info {
            display: inline;
            margin: 15px;
            justify-content: center;
            text-align: center;

        }

        table {
            width: 100%;
        }

        td, th {
            padding: 15px;
            width: 25%;
        }

    </style>
</head>
<body>
<form action="" method="post">
    <label for="tipas">
        <input type="text" placeholder="gyvnuo tipas" name="tipas" autocomplete="off">
    </label>
    <label for="vardas">
        <input type="text" placeholder="gyvuno vardas" name="vardas" autocomplete="off">
    </label>
    <label for="amzius">
        <input type="text" placeholder="gyvuno amzius" name="amzius" autocomplete="off">
    </label>
    <input type="submit" name="submit" value="submit">
</form>



</body>
</html>