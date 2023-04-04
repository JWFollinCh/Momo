<?php require 'config.php' ?>
<?php require 'bd.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Momo</title>

    <script src="https://kit.fontawesome.com/d1b5388e0f.js" crossorigin="anonymous"></script>

    <link href="<?php echo ROOT_URL ?>assets/css/momo.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL ?>assets/css/custom.css" rel="stylesheet">
</head>

<body>
    <header class="nav-left expandir-lg tema-momo blur-momo p-sticky contenedor">
        <button class="dropdown"></button>

        <a class="logo" href="<?php echo ROOT_URL ?>index.php"><i class="fa-solid fa-cat"></i></a>

        <nav class="drop contenedor">
            <?php require 'menu.php' ?>
            <hr class="w-100">
            <?php include 'menu-lateral.php' ?>
        </nav>
    </header>