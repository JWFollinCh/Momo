<?php include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; ?>

<article class="contenedor">
    <h2 class="texto-centrado mb-1">Colores</h2>

    <div id="colores">


        <?php
        $color = 0;
        while ($color < count($clases)) {
        ?>

            <article class="mb-1">
                <h3><?php echo $nombres[$color] ?></h3>
                <div class="<?php echo $clases[$color] ?>">
                    <?php for ($i = 1; $i <= 15; $i++) {
                        echo '<div></div>';
                    }
                    ?>
                </div>
            </article>

        <?php
            $color++;
        };
        ?>

    </div>
</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>