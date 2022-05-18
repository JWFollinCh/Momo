<?php require 'config.php' ?>
<?php require 'bd.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Momo</title>


    <link href="<?php echo ROOT_URL ?>assets/css/framework.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL ?>assets/css/custom.css" rel="stylesheet">
</head>

<body>
    <header class="nav-left expandir-lg tema-momo blur-momo p-sticky contenedor">
        <button class="dropdown"></button>

        <h3><a href="<?php echo ROOT_URL ?>index.php">Momo</a></h3>


        <nav class="drop contenedor">
            <?php require 'menu.php' ?>
        </nav>
    </header>