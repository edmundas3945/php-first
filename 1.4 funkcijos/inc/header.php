<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $currentPage['title'] ?></title>
    <style>
        .current {
            color: white;
            background-color: black;
        }
    </style>
</head>

<body>
<nav>
    <a href="index.php" class="nav-link <?php if ($currentPage['page'] === 'home') echo 'current' ?> ">Home</a>
    <a href="ref.php" class="nav-link <?php if ($currentPage['page'] === 'ref') echo 'current' ?>">Reference</a>
    <a href="ref.php" class="nav-link">About</a>
</nav>