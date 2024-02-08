<?php include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; ?>

<article class="contenedor">
    <h2 class="texto-centrado mb-1">Columnas</h2>
    <div class="fila">
        <?php for ($i = 1; $i <= 12; $i++) { ?>
            <article class="col-<?php echo $i ?> no-gutters p-0 ml-1 mr-1 mb-1">
                <div class="tarjeta p-1 sin-sombra">
                    <p>Col-<?php echo $i ?></p>
                    <div class="pie-tarjeta p-1">
                        <p><?php $n = 100;
                            $r = ($n * $i) / 12;
                            echo (round($r)) . '%' ?></p>
                    </div>
                </div>
            </article>
        <?php }; ?>
    </div>
</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>