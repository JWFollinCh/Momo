<?php include '../header.php'?>

<main class="contenedor py-6">
    <h1 class="texto-centrado mb-1">Temas</h1>

    <section class="fila">

        <article class="col-12 col-md-4 col-lg-3">
            <?php include '../menu-lateral.php' ?>
        </article>

        <article class="col-12 col-md-8 col-lg-9">

            <?php
            $color = 0;
            while($color < count($clases)){
            ?>
            <div class="nav-left tema-<?php echo $clases[$color] ?> contenedor mb-2">

                <h3><a href="<?php echo ROOT_URL ?>index.php"><?php echo $nombres[$color] ?></a></h3>


                <nav class="contenedor">
                    <ul>
                        <li><a href="<?php echo ROOT_URL ?>index.php">Inicio</a></li>
                        <li><a href="<?php echo ROOT_URL ?>contacto.php">Contacto</a></li>
                    </ul>
                </nav>
            </div>

            <?php
            $color++;
            };
            ?>
        </article>
    </section>

</main>

<?php include '../footer.php' ?>