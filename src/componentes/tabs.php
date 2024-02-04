<?php include $_SERVER['DOCUMENT_ROOT']. '/header.php'; ?>

<main class="contenedor">
    <h1 class="texto-centrado mb-1">Tabs</h1>

    <section>

        <h2 class="texto-centrado">Space evenly</h2>
        <article class="tabs tab-principal mt-2 mb-4">

            <ul class="tab-space-evenly">
                <li data-target-tab="tab1">Tab 1</li>
                <li data-target-tab="tab2">Tab 2</li>
                <li data-target-tab="tab3">Tab 3</li>
                <li data-target-tab="tab4">Tab 4</li>
            </ul>

            <div class="contenido-tabs pt-1">
                <div id="tab1" class="hidden show">
                    <div class="tarjeta-principal">
                        <h4>Primer tab</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quidem et voluptatem
                            provident ad consectetur fugit numquam delectus quas, dolorem mollitia voluptates cumque
                            quaerat laborum minus sint iure sequi necessitatibus?</p>
                    </div>
                </div>
                <div id="tab2" class="hidden">
                    <div class="tarjeta-principal">
                        <h4>Segundo tab</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quidem et voluptatem
                            provident ad consectetur fugit numquam delectus quas, dolorem mollitia voluptates cumque
                            quaerat laborum minus sint iure sequi necessitatibus?</p>
                    </div>
                </div>
                <div id="tab3" class="hidden">
                    <div class="tarjeta-principal">
                        <h4>Tercer tab</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quidem et voluptatem
                            provident ad consectetur fugit numquam delectus quas, dolorem mollitia voluptates cumque
                            quaerat laborum minus sint iure sequi necessitatibus?</p>
                    </div>
                </div>
                <div id="tab4" class="hidden">
                    <div class="tarjeta-principal">
                        <h4>Cuarto tab</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quidem et voluptatem
                            provident ad consectetur fugit numquam delectus quas, dolorem mollitia voluptates cumque
                            quaerat laborum minus sint iure sequi necessitatibus?</p>
                    </div>
                </div>
            </div>
        </article>

        <h2 class="texto-centrado">Space around</h2>
        <article class="tabs tab-alerta mt-2 mb-4">

            <ul class="tab-space-around">
                <li data-target-tab="tab5">Tab 5</li>
                <li data-target-tab="tab6">Tab 6</li>
                <li data-target-tab="tab7">Tab 7</li>
                <li data-target-tab="tab8">Tab 8</li>
            </ul>

            <div class="contenido-tabs pt-1">
                <div id="tab5" class="hidden show">
                    <div class="tarjeta-alerta">
                        <h4>Quinto tab</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quidem et voluptatem
                            provident ad consectetur fugit numquam delectus quas, dolorem mollitia voluptates cumque
                            quaerat laborum minus sint iure sequi necessitatibus?</p>
                    </div>
                </div>
                <div id="tab6" class="hidden">
                    <div class="tarjeta-alerta">
                        <h4>Sexto tab</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quidem et voluptatem
                            provident ad consectetur fugit numquam delectus quas, dolorem mollitia voluptates cumque
                            quaerat laborum minus sint iure sequi necessitatibus?</p>
                    </div>
                </div>
                <div id="tab7" class="hidden">
                    <div class="tarjeta-alerta">
                        <h4>Séptimo tab</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quidem et voluptatem
                            provident ad consectetur fugit numquam delectus quas, dolorem mollitia voluptates cumque
                            quaerat laborum minus sint iure sequi necessitatibus?</p>
                    </div>
                </div>
                <div id="tab8" class="hidden">
                    <div class="tarjeta-alerta">
                        <h4>Octavo tab</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quidem et voluptatem
                            provident ad consectetur fugit numquam delectus quas, dolorem mollitia voluptates cumque
                            quaerat laborum minus sint iure sequi necessitatibus?</p>
                    </div>
                </div>
            </div>
        </article>

        <h2 class="texto-centrado">Space between</h2>
        <article class="tabs tab-advertencia mt-2 mb-4">

            <ul class="tab-space-between">
                <li data-target-tab="tab9">Tab 9</li>
                <li data-target-tab="tab10">Tab 10</li>
                <li data-target-tab="tab11">Tab 11</li>
                <li data-target-tab="tab12">Tab 12</li>
            </ul>

            <div class="contenido-tabs pt-1">
                <div id="tab9" class="hidden show">
                    <div class="tarjeta-advertencia">
                        <h4>Noveno tab</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quidem et voluptatem
                            provident ad consectetur fugit numquam delectus quas, dolorem mollitia voluptates cumque
                            quaerat laborum minus sint iure sequi necessitatibus?</p>
                    </div>
                </div>
                <div id="tab10" class="hidden">
                    <div class="tarjeta-advertencia">
                        <h4>Décimo tab</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quidem et voluptatem
                            provident ad consectetur fugit numquam delectus quas, dolorem mollitia voluptates cumque
                            quaerat laborum minus sint iure sequi necessitatibus?</p>
                    </div>
                </div>
                <div id="tab11" class="hidden">
                    <div class="tarjeta-advertencia">
                        <h4>Décimo primer tab</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quidem et voluptatem
                            provident ad consectetur fugit numquam delectus quas, dolorem mollitia voluptates cumque
                            quaerat laborum minus sint iure sequi necessitatibus?</p>
                    </div>
                </div>
                <div id="tab12" class="hidden">
                    <div class="tarjeta-advertencia">
                        <h4>Décimo segundo tab</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quidem et voluptatem
                            provident ad consectetur fugit numquam delectus quas, dolorem mollitia voluptates cumque
                            quaerat laborum minus sint iure sequi necessitatibus?</p>
                    </div>
                </div>
            </div>
        </article>
    </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT']. '/footer.php'; ?>