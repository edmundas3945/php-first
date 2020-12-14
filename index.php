<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
date_default_timezone_set('Europe/Vilnius');

//$page = $_SERVER['PHP_SELF'];
//$sec = "1";
//header("Refresh: $sec; url=$page");


//1. Sukurkite 29 dienu masyva panaudojant for cikla. Kiekvienoje dienoje turi
// buti 'Name' => '1-dienis', '29-dienis' ir uzimtumas random vertinant nuo 0(laisva) iki 5(uzimtas)

//2. Parasyti if kuris tikrintu ar 10 diena yra laisva, jei taip - ekrane raudona spalva, panaudojus
//h1 taga atvaizduoti 'Tau siandiena laisva'.
//3. Parasyti cikla kuris tikrintu visa musu masyva ir priklausomai nuo to ar masyve
// yra daugiau nei 3 laisvos dienos atvaizduoti ekrane h3 tage melyna spalva 'Atostogos'.

$month = [];
$atostogos = 0;
$counter = 0;

for ($x = 1; $x < 29; $x++) {
    $month[] = [
        'name' => $x . ' dienis',
        'busyIndex' => rand(0, 5),
    ];
}
//var_dump($month);

$saldainiai = [
    'sveriami' => [
        'sokoladiniai' => [
            [
                'name' => 'Migle',
                'price' => 9,
            ],
            [
                'name' => 'Kauke',
                'price' => 7,
            ],
        ],
        'ledinukai' => [
            [
                'name' => 'Bibi',
                'price' => 3.4,
            ],
            [
                'name' => 'Ledainis',
                'price' => 3,
            ],
        ],
    ],
    'batoneliai' => [
        'sokoladiniai' => [
            [
                'name' => 'HemaToGen',
                'price' => 1,
            ],
            [
                'name' => 'Mars',
                'price' => 0.2,
            ],
        ],
        'aviziniai' => [
            [
                'name' => 'Corny',
                'price' => 1.2,
            ],
            [
                'name' => 'Belvita',
                'price' => 0.83,
            ],
        ],
    ],
];

print $saldainiai['sveriami']['sokoladiniai'][1]['price'];

print $saldainiai['batoneliai']['sokoladiniai'][1]['name'];

foreach ($saldainiai['batoneliai']['aviziniai'] as $item) {
    print $item['name'] . " <br>";
}

foreach ($saldainiai['sveriami']['ledinukai'] as $item) {
    print $item['name'] . ' ';
    print $item['price'] . " <br>";

}

foreach ($saldainiai as $sveriami) {
    foreach ($sveriami as $sokoladiniai) {
        foreach ($sokoladiniai as $turinys) {
            foreach ($turinys as $preke) {
                if (is_float($preke)) {
                    $preke = '*';
                }
            }
        }
    }
}

$darbuotojiai = [
    [
        'name' => 'Juozas',
        'lastname' => 'Juozaitis',
        'age' => '40',
        'sex' => 'man',
    ],
    [
        'name' => 'Milda',
        'lastname' => 'Mildauskaite',
        'age' => '28',
        'sex' => 'woman',
    ],
    [
        'name' => 'Darius',
        'lastname' => 'Dariauskas',
        'age' => '40',
        'sex' => 'man',
    ],
    [
        'name' => 'Skaiste',
        'lastname' => 'Uzkamante',
        'age' => '40',
        'sex' => 'woman',
    ],
    [
        'name' => 'Giedre',
        'lastname' => 'Miliauskiene',
        'age' => '38',
        'sex' => 'woman',
    ],
    [
        'name' => 'Kasparas',
        'lastname' => 'Dambrauskas',
        'age' => '22',
        'sex' => 'man',
    ],
];


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
        }

        img {
            width: 21px;
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

<?php for ($x = 0; $x < count($month); $x += 10) : ?>
    <?php if ($month[$x]['busyIndex'] === 0) : ?>
        <h1 style="background-color: green"><?php print $month[$x]['name']; ?> is free</h1>
    <?php else : ?>
        <h1 style="background-color: grey"><?php print $month[$x]['name']; ?> day is busy</h1>
    <?php endif; ?>
<?php endfor; ?>
<?php for ($x = 0; $x < count($month); $x++) : ?>
    <?php if ($month[$x]['busyIndex'] == 0) : $atostogos++ ?>
        <?php if ($atostogos >= 3) : ?>
            <h1 style="background-color: green">Atostogos</h1>
        <?php endif; ?>
    <?php endif; ?>
<?php endfor; ?>



<?php foreach ($darbuotojiai as $darbuotojas): ?>
    <?php if ($darbuotojas['age'] < 30 && $darbuotojas['sex'] === 'woman') : ?>
        <div>
            asmuo jaunesnis nei 30 ir yra moteris:<strong><?php print $darbuotojas['name']; ?></strong>
        </div>
    <?php endif; ?>
    <?php if ($darbuotojas['age'] == 40 && $darbuotojas['sex'] === 'man'): ?>
        <?php $counter++; ?>
        <div>
            vyru kurie turi 40 metu yra:<strong><?php print $counter; ?></strong>
        </div>
    <?php endif; ?>
    <div class="card">
        <h2><?php print $darbuotojas['name'] . $darbuotojas['lastname']; ?></h2>
        <h3><?php print $darbuotojas['age']; ?></h3>
        <h5><?php print $darbuotojas['sex']; ?></h5>
    </div>

<?php endforeach; ?>
<div>

</div>

</body>
</html>