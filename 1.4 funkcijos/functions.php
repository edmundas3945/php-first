<?php
// susikuriame pirma savo funkcija
// funkcijos aprasymas
function myFirstFunction($var1, $var2, $varDefault = 'bet kas kas mums reikia')
{
    // funkcijos body
    $rez = "$var1, $var2, $varDefault <br>";
    return $rez;
}

// » Sukurti funkciją, kuri ima 3 parametrus, ir atspausdina juos
// <h3> HTML taguose.

function printH3($var1, $var2, $var3)
{
    echo "<h3>$var1</h3>";
    echo "<h3>$var2</h3>";
    echo "<h3>$var3</h3>";
}



// » Sukurti funkciją, kuri ima 2 parametrus, juos sudaugina, ir grąžina
//rezultatą į iškvietimo vietą.
// $test = 123;
function sand($num1, $num2)
{
    $rez = $num1 * $num2;
    return $rez;
}

// » Sukurti funkciją, kuri ima 1 parametrą ir grąžiną teigiamą reikšmę.
//(Patikrinti tipą). -->
// $num = 5
function returnPositive($num)
{
    // pasitikrinti tipa
    if (is_int($num)) {
        echo 'parameter is int<br>';
        return abs($num);
    } else {
        echo 'parameter is not int';
    }
}

// Funkcija su default reiksme
// sukurti funkcija kuri paima 3-4 parametru ir grazina ju vidurki

function myAvg($num1, $num2, $num3, $num4 = false)
{
    $length = 4;
    if ($num4 === false) {
        $length = 3;
    }

    $sum = $num1 + $num2 + $num3 + $num4;
    $avg = $sum / $length;
    return $avg;
}

// masyvu argumentu pavyzdys
// atspausdinti paduoto masyvo vidurki

function myAvgArr($arr)
{
    $length = count($arr);
    $sum = 0;
    foreach ($arr as $val) {
        $sum += $val;
    }
    $avg = $sum / $length;
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    echo 'sio masyvo vidurkis yra ' . $avg . '<br>';
    echo 'sio masyvo suma yra ' . $sum . '<br>';
    echo 'sio masyvo elementu skaicius yra ' . $length . '<br>';
}


// echo 'Stuff';
