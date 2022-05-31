<?php include 'menu.php'; ?>

    <article class="cardlogin">
        <section class="card">
        <h3>Información del usuario </h3>
            <form class="form-horizontal" action="backend/edit_user.php" name="usuario" id="formperfil" method="POST">

                <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?> " />

                <section class="form-group">
                    <label for="usuario" class="col-md-2 control-label">Nombre:</label>
                    <section class="col-md-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $_SESSION['nombre'] ?>">
                    </section>
                </section>

                <section class="form-group">
                    <label for="nombre" class="col-md-2 control-label">Apellidos:</label>
                    <section class="col-md-10">
                        <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $_SESSION['apellido'] ?>">
                    </section>
                </section>

                <section class="form-group">
                    <label for="email" class="col-md-2 control-label">Email:</label>
                    <section class="col-md-10">
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email'] ?>">
                    </section>
                </section>

                <section class="form-group">
                        <?php if(isset($_SESSION['error'])) {echo $_SESSION['error']; session_destroy();}?>
                    <input type="submit" value="Modificar">
                </section>
            </form>
        </section>
        <section class="card">
            <?php include 'usuarios.php'; ?>
        </section>
    </article>
<?php include 'footer.php'; ?>