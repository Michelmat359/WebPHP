<?php
ob_start(); ?>

    <?php include 'menu.php';?>

    <main>
        <!--CONTENIDO DE LA PÁGINA-->
        <article class="contenido">
            <section class="card">
                <img src="img/archer1.jpg" class="competiciones">
                <img src="img/archer3.jpg" class="competiciones">
                <h1>ÚLTIMAS CLASIFICACIONES</h1>
                <h2></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore <strong>competición</strong> magna aliqua. <br/>
                    <br/>
                    COMPETICIONES:<br/>
                    <ul class="lista">
                        <li><strong>25/03/22</strong>.- Torneo de Villena </li>
                        <li><strong>12/04/22</strong>.- Torneo de Sax </li>
                        <li><strong>21/04/22</strong>.- Torneo Interno de la Villa </li>
                        <li><strong>24/04/22</strong>.- Torneo Aire Libre </li>
                    </ul>
                </p>
            <br/>
            <hr>
            <br/>
                <h2>BENEFICIOS DEL TIRO CON ARCO</h2>
                <h5>Último artículo, Apr 20, 2019</h5>
                <img src="img/beneficios.jpg" class="fullImg" style="padding: 15px">
                <p><strong>Lorem ipsum</strong></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>
                    In ac gravida ex. Integer et quam ac diam feugiat feugiat vitae a diam.
                    Proin in magna ut nulla placerat dictum eget sed lacus. Cras ut tortor nibh.
                    Sed vitae augue elit. Pellentesque tempus volutpat libero eget sollicitudin.
                    Sed consequat felis ut ex semper, et dignissim urna pretium.
                </p>
                <br>
            </section>
        </article>

        <!--COLUMNA DE ANUNCIOS-->
        <aside class="anuncios">
            <section class="card">
                <a href="#" title="Últimas noticias">
                    <img src="img/novedad.jpg" class="imgAnuncio"/>
                </a>
            </section>
            <section class="card">
                <h3>¡Productos destacados!</h3>
                    <!--Popovers-->
                    <img src="img/flecha6.png" class="imgAnuncio" title="Flechas montadas" data-content="Flechas premontadas. Tamaños no adaptables">
                    <img src="img/flecha3.2.png" class="imgAnuncio" title="Flecha de sala" data-content="Flecha de aluminio para sala">
                    <img src="img/flecha4.2.png" class="imgAnuncio" title="Aluminio" data-content="Flecha ideal para empezar a competir">
                    <img src="img/flecha2.png" class="imgAnuncio" title="Easton CarbonOne" data-content="Flecha ideal para empezar a competir">
                    <img src="img/flecha1.png" class="imgAnuncio" title="Apollo" data-content="Flecha ideal para empezar a competir">
                    <img src="img/flecha5.2.png" class="imgAnuncio" title="ACC" data-content="Flechas a medida">
            </section>
            <section class="card">
                <a class="twitter-timeline" data-lang="es" data-width="541" data-height="500" data-theme="light" href="https://twitter.com/RFETA?ref_src=twsrc%5Etfw"></a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </section>
        </aside>
    </main>
</div>
    <!--PIE DE PÁGINA-->
<footer>
    <?php
    echo "<p>Laura Moya Ruiz &copy; 1999-" . date("Y") . " All rigth reserved</p>";
    ?>

</footer>
<!-- jQuery (es necesario para plugins JavaScript de Bootstrap  ) -->
<script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>