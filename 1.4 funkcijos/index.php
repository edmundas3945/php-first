<?php
$currentPage = [
    "title" => "Functions",
    "page" => "home",
];

// include bando itraukti nurodyta faila ir jei nepavyksta tesia toliau
// include('./functions.php1');
// include_once('./functions.php1');
// jei nerasim nurodyto failo kodo vygdymas yra stabdomas
require('./functions.php');
require './inc/header.php';
?>

    <h1>Functions</h1>

<?php
// panaudoti funkcija arba iskviesti

$firstRun = myFirstFunction('John', 'Doe');
echo $firstRun;
$secondRun = myFirstFunction('John', 'Doe', 'age: 50');
echo "<h2>$secondRun</h2>";

// pirmoji uzduotis
printH3(1, 'du', 'true');

// antroji uzduotis
echo sand(10, 5);
echo '<br>';
echo returnPositive(-50);

echo '<h2>Vidurkiai</h2>';
// vidurkiai
echo myAvg(4, 2, 6, 10);
echo '<br>';
echo myAvg(4, 2, 6);

$myArr = [2, 4, 7, 12, -5];

myAvgArr($myArr);





// itraukti footer
require('./inc/footer.php');
?>