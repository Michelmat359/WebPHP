<?php include 'menu.php'; ?>

    <!--CONTENIDO DE LA PÁGINA-->
    <article class="contenido">
        <section class="card">
            <h1>Competiciones autonómicas</h1>
            <hr>
            <h3 id="subt">Próximos eventos</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ullamcorper lacus non ex bibendum ullamcorper vitae a lacus. Duis convallis ac nisl pellentesque vulputate. Ut congue urna tellus. Mauris commodo iaculis dui vel egestas.</p>
            <section class="table-responsive">
                <table class="table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Lugar</th>
                            <th>Fecha</th>
                            <th>Organiza</th>
                        </tr>
                    </thead>
                    <tr id="par">
                        <td id="negrita">Competi1</td>
                        <td>León</td>
                        <td>05/05/05</td>
                        <td>Club equipo1</td>
                    </tr>
                    <tr id="impar">
                        <td id="negrita">Competi2</td>
                        <td>Pontevedra</td>
                        <td>06/06/06</td>
                        <td>Club equipo2</td>
                    </tr>
                    <tr id="par">
                        <td id="negrita">Competi3</td>
                        <td>Toledo</td>
                        <td>07/07/07</td>
                        <td>Club equipo3</td>
                    </tr>
                    <tr id="impar">
                        <td id="negrita">Competi4</td>
                        <td>Alicante</td>
                        <td>08/08/08</td>
                        <td>Club equipo4</td>
                    </tr>
                </table>
            </section>
            <br>
            <hr>

            <h3 id="subt">Resumen de la jornada</h3>
            <p>Etiam eget lobortis eros, eu ornare quam. Ut id odio a justo pharetra imperdiet. Donec quam est, elementum a dictum sed, condimentum ut dolor. Mauris id neque ligula. Nulla in dignissim urna. Integer euismod lorem ut metus congue malesuada. Donec vel gravida lectus. Aenean quis maximus libero. Aenean aliquam placerat metus sed vehicula.</p>
            <p>Etiam eget lobortis eros, eu ornare quam. Ut id odio a justo pharetra imperdiet. Donec quam est, elementum a dictum sed, condimentum ut dolor. Mauris id neque ligula. </p>
            <section id="slide" class="carousel slide" data-ride="carousel" style="padding: 15px">
                <ul class="carousel-indicators">
                    <li data-target="#slide" data-slide-to="0" class="active"></li>
                    <li data-target="#slide" data-slide-to="1" class="active"></li>
                    <li data-target="#slide" data-slide-to="2" class="active"></li>
                </ul>
                <section class="carousel-inner">
                    <section class="carousel-item active">
                        <img src="images/2_nacionales/ceu12.0.jpg" class="img-fluid">
                        <section class="carousel-caption">
                            <h4>Resumen de tiradas</h4>
                        </section>
                    </section>
                    <section class="carousel-item">
                        <img src="images/2_nacionales/ceu22.0.jpg" class="img-fluid">
                    </section>
                    <section class="carousel-item">
                        <img src="images/2_nacionales/ceu32.0.jpg" class="img-fluid">
                    </section>
                </section>
                <a class="carousel-control-prev" href="#slide" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                <a class="carousel-control-next" href="#slide" data-slide="next"><span class="carousel-control-next-icon"></span></a>
            </section>
            <br>
            <section class="table-responsive">
                <table class="table-striped" id="nacional">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Categoría</th>
                            <th>Modalidad</th>
                            <th>Resultado</th>
                            <th>Posición</th>
                        </tr>
                    </thead>
                    <tr id="par">
                        <td id="negrita">Tirador1</td>
                        <td>Senior-masculino</td>
                        <td>Recurvo</td>
                        <td>710 pts</td>
                        <td>1º</td>
                    </tr>
                    <tr id="impar">
                        <td id="negrita">Tirador2</td>
                        <td>Senior-masculino</td>
                        <td>compuesto</td>
                        <td>700 pts</td>
                        <td>2º</td>
                    </tr>
                    <tr id="par">
                        <td id="negrita">Tirador3</td>
                        <td>Senior-femenino</td>
                        <td>Compuesto</td>
                        <td>720 pts</td>
                        <td>1º</td>
                    </tr>
                    <tr id="impar">
                        <td id="negrita">Tirador4</td>
                        <td>Senior-femenino</td>
                        <td>Recurvo</td>
                        <td>718 pts</td>
                        <td>2º</td>
                    </tr>
                    <tr id="par">
                        <td id="negrita">Tirador5</td>
                        <td>Senior-femenino</td>
                        <td>Desnudo</td>
                        <td>635 pts</td>
                        <td>1º</td>
                    </tr>
                </table>
            </section>
        </section>
    </article>
        <?php include 'anuncios.php'; ?>
        <?php include 'footer.php'; ?>
