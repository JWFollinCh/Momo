<?php include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; ?>


<article class="contenedor">
    <h2 class="texto-centrado mb-1">Momo</h2>
    <?php //echo __DIR__ 
    ?>
    <div>
        <form>
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Nombre" id="nombre" name="nombre" required>
            <input type="email" placeholder="Correo" name="correo" required>
            <input type="tel" placeholder="Teléfono (opcional)" name="telefono">
            <!-- <input type="text" placeholder="País" name="pais" required> -->
            <select name="pais" required>
                <option selected>Chile</option>
                <option>Argentina</option>
                <option>Bolivia</option>
                <option>Brasil</option>
                <option>Colombia</option>
                <option>Ecuador</option>
                <option>Paraguay</option>
                <option>Perú</option>
                <option>Uruguay</option>
                <option>Venezuela</option>
                <option>Otros</option>
            </select>
            <input type="text" placeholder="Ciudad" name="ciudad" required>
            <input type="text" placeholder="Dirección (opcional)" name="direccion">
            <input type="number" placeholder="Código Postal (opcional)" name="cp">

            <div class="py-1">
                <div class="radio">
                    <input type="radio" name="radio" id="radiouno" checked>
                    <label for="radiouno">Radio Uno</label>
                </div>

                <div class="radio">
                    <input type="radio" name="radio" id="radiodos">
                    <label for="radiodos">Radio Dos</label>
                </div>
            </div>

            <div class="py-1">
                <div class="check">
                    <input type="checkbox" name="" id="cbuno" value="checkbox" checked>
                    <label for="cbuno">Checkbox Uno</label>
                </div>

                <div class="check">
                    <input type="checkbox" name="" id="cbdos" value="checkbox">
                    <label for="cbdos">Checkbox Dos</label>
                </div>
            </div>


            <label for="range">Radio Dos</label>
            <input type="range" name="" id="range">

            <textarea placeholder="Mensaje"></textarea>

            <input class="btn-momo" type="submit" name="enviar">
        </form>
    </div>
</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>