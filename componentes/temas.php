<?php include '../header.php' ?>

<main class="contenedor">
    <h1 class="texto-centrado mb-1">Temas</h1>

    <section>

        <?php
        $color = 0;
        while ($color < count($clases)) {
        ?>
        <article class="nav-left tema-<?php echo $clases[$color] ?> contenedor mb-2">

            <h3><a href="<?php echo ROOT_URL ?>index.php"><?php echo $nombres[$color] ?></a></h3>


            <nav class="contenedor">
                <ul>
                    <li><a href="<?php echo ROOT_URL ?>index.php">Inicio</a></li>
                    <li><a href="<?php echo ROOT_URL ?>contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </article>

        <?php
            $color++;
        };
        ?>
    </section>

</main>

<?php include '../footer.php' ?>