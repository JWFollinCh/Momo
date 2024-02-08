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

    <link href="<?php ROOT_PATH ?>/assets/css/build/momo.min.css" rel="stylesheet">
    <!-- <link href="<?php ROOT_PATH ?>/assets/css/custom.css" rel="stylesheet"> -->
</head>

<body>
    <header class="nav-right expandir-lg tema-momo blur-momo p-sticky contenedor">
        <button class="dropdown"></button>

        <a class="logo" href="<?php ROOT_PATH ?>/index.php"><i class="fa-solid fa-cat"></i></a>

        <nav class="drop contenedor">
            <?php require 'menu.php' ?>
        </nav>
    </header>

    <main class="fila float-left bg-momo-gradiente ">
        <aside class="col-12 col-lg-2 p-2 texto-claro">
            <h4 class="mb-1">Documentación</h4>
            <ul>
                <li>En progreso</li>
            </ul>

            <h4 class="mt-2 mb-1">Componentes</h4>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/menu-lateral.php' ?>
        </aside>

    <section class="col-12 col-lg-10 p-0 m-0 vh-100 overflow-scroll bg-claro">