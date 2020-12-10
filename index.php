<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
date_default_timezone_set('Europe/Vilnius');

//$page = $_SERVER['PHP_SELF'];
//$sec = "1";
//header("Refresh: $sec; url=$page");


$phones = [
    'Samsung' => [
        [
            'model' => 'galaxy s20',
            'memory' => 128,
            'OS' => 'Android',
            'img' => 'images/s20.jpg',
            'price' => 599.99
        ],
        [
            'model' => 'galaxy s8',
            'memory' => 64,
            'OS' => 'Android',
            'img' => 'images/s8.jpg',
            'price' => 274.00
        ],
        [
            'model' => 'galaxy s10',
            'memory' => 128,
            'OS' => 'Android',
            'img' => 'images/s10.jpg',
            'price' => 539.99
        ]
    ],
    'iPhone' => [
        [
            'model' => 'iphone 7',
            'memory' => 32,
            'OS' => 'iOS',
            'img' => 'images/iphone 7.jpg',
            'price' => 214.00
        ],
        [
            'model' => 'iphone x',
            'memory' => 64,
            'OS' => 'iOS',
            'img' => 'images/iPhone X.jpg',
            'price' => 399.99
        ],
        [
            'model' => 'galaxy 11',
            'memory' => 64,
            'OS' => 'iOS',
            'img' => 'images/iphone11.png',
            'price' => 'i pm'
        ]
    ],
]
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
        }
        .companyContainer {
            width: 45%;
            border: 15px outset darkred;
            margin: 15px;
            text-align: center;
        }
        .companyContainer img {
            width: 210px;
        }
        .backgroundRed {
            background-color: #8c2727;
        }
        .title {
            font-size: 21px;
            color: white;
        }
    </style>
</head>
<body>


<?php foreach ($phones as $key => $value):?>

    <div class="companyContainer">
        <div><h2><?php print $key; ?></h2></div>

                <?php foreach ($value as $phone): ?>
                <div style="margin: 15px">
                    <img src="<?php print $phone['img'] ;?>" alt="">
                    <div class="backgroundRed title"><strong><?php print $phone['model'] ;?></strong></div>
                    <div class="backgroundRed"><?php print $phone['memory'] ;?>Gb</div>
                    <div class="backgroundRed"><?php print $phone['OS'] ;?></div>
                    <div class="backgroundRed"><?php print $phone['price'] ;?> pinigu</div>
                </div>

                <?php endforeach; ?>
    </div>

<?php endforeach; ?>
</body>
</html>