<?php include '../header.php' ?>

<main class="contenedor">
    <h1 class="texto-centrado mb-1">Colores</h1>

    <section id="colores">


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

    </section>

</main>

<?php include '../footer.php' ?>