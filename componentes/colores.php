<?php include '../header.php'?>

<main class="contenedor py-6">
    <h1 class="texto-centrado mb-1">Colores</h1>

    <section class="fila">

        <article class="col-12 col-md-4 col-lg-3">
            <?php include '../menu-lateral.php' ?>
        </article>

        <article class="col-12 col-md-8 col-lg-9">

            <div id="colores">

                <?php
                $color = 0;
                while($color < count($clases)){
                ?>

                <div class="mb-1">
                    <h3><?php echo $nombres[$color] ?></h3>
                    <div class="<?php echo $clases[$color] ?>">
                        <?php for($i=1; $i <= 15; $i++){
                        echo '<div></div>';
                        }
                        ?>
                    </div>
                </div>

                <?php
                $color++;
                };
                ?>
            </div>
        </article>

    </section>

</main>

<?php include '../footer.php' ?>