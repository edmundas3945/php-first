<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
date_default_timezone_set('Europe/Vilnius');

$conFirst = fopen("../../test.csv", 'r');
$totalFile = fgetcsv($conFirst);
fclose($conFirst);

//var_dump($totalFile);

if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['age']) && !empty($_POST['email'] && !empty($_POST['phone']))){
    $conSecond = fopen("../../test.csv", "a");
    fwrite($conSecond, $_POST['name'].','.$_POST['surname'].','.$_POST['age'].','.$_POST['email'].','.$_POST['phone']."\r\n");
    fclose($conSecond);
//    var_dump($_POST);
}else{
    print 'ifas neveikia';
}

$commercialImages = [
    '../../images/new%20project/indai.jpg',
    '../../images/new%20project/SS%20SPONGEBOB.jpg',
    '../../images/new%20project/ELONALD%20TRUSK.jpg',
    '../../images/new%20project/VEGETABLES.jpg'
]

?>

