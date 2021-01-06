<?php
include_once '../controlers/page.php';
//var_dump($_POST);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="../../assets/CSS/style.css">
</head>
<body>
<form action="" method="POST">
    <label for="name">
        <input type="text" placeholder="Name" name="name" autocomplete="off">
    </label>
    <label for="surname">
        <input type="text" placeholder="Surname" name="surname" autocomplete="off">
    </label>
    <label for="age">
        <input type="text" placeholder="Age" name="age" autocomplete="off">
    </label>
    <label for="email">
        <input type="text" placeholder="Email" name="email" autocomplete="off">
    </label>
    <label for="text">
        <input type="text" placeholder="Phone" name="phone" autocomplete="off">
    </label>
    <input type="submit"  name="submit" value="Submit">
</form>

</body>
</html>