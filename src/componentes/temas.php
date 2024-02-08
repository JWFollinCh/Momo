<?php include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; ?>

<article class="contenedor">

    <h2 class="texto-centrado mb-1">Temas</h2>

    <div>

        <?php
        $color = 0;
        while ($color < count($clases)) {
        ?>
            <article class="nav-left tema-<?php echo $clases[$color] ?> contenedor mb-2">
                <h3><a href="index.php"><?php echo $nombres[$color] ?></a></h3>

                <nav class="contenedor">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                </nav>
            </article>

        <?php
            $color++;
        };
        ?>
    </div>
</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>