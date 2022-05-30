<?php include 'menu.php'; ?>
    <article class="cardlogin">
        <section class="card">
        <h3>Información del usuario </h3>
            <form class="form-horizontal" name="usuario" id="formperfil" method="POST">
                <section class="form-group">
                    <label for="usuario" class="col-md-2 control-label">Nombre:</label>
                    <section class="col-md-10">
                        <input type="text" class="form-control" id="usuario" name="usuario" value="usuario">
                    </section>
                </section>

                <section class="form-group">
                    <label for="nombre" class="col-md-2 control-label">Nombre:</label>
                    <section class="col-md-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" value="nombre">
                    </section>
                </section>

                <section class="form-group">
                    <label for="email" class="col-md-2 control-label">Email:</label>
                    <section class="col-md-10">
                        <input type="email" class="form-control" id="email" name="email" value="email">
                    </section>
                </section>

                <section class="form-group">
                    <label for="password" class="col-md-2 control-label">Password:</label>
                    <section class="col-md-10">
                        <input type="password" class="form-control" id="pass1" name="pass1" placeholder="password">
                    </section>
                </section>

                <section class="form-group">
                    <label for="password" class="col-md-2 control-label">Password:</label>
                    <section class="col-md-10">
                        <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Repetir password"></textarea>
                    </section>
                </section>
                <section class="form-group">
                        <button class="btn btn-danger editarUsuario">Guardar</button>
                </section>
            </form>
        </section>
    </article>
    <script>

    </script>
<?php include 'footer.php'; ?>