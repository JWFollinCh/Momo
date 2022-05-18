<?php include '../header.php'?>

<main class="contenedor py-6">
    <h1 class="texto-centrado mb-1">Columnas</h1>

    <section class="fila">

        <article class="col-12 col-md-4 col-lg-3">
            <?php include '../menu-lateral.php' ?>
        </article>

        <article class="col-12 col-md-8 col-lg-9">
            <div class="fila">
                <?php for($i=1; $i <= 12; $i++){ ?>
                <div class="col-<?php echo $i ?> no-gutters p-0 ml-1 mr-1 mb-1">
                    <div class="tarjeta p-1 sin-sombra">
                        <p>Col-<?php echo $i ?></p>
                        <div class="pie-tarjeta p-1">
                            <p><?php $n=100; $r= ($n * $i) / 12; echo (round ($r)) . '%' ?></p>
                        </div>
                    </div>
                </div>
                <?php }; ?>

            </div>
        </article>
    </section>
</main>

<?php include '../footer.php' ?>