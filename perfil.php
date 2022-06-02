<?php include 'menu.php'; ?>
<?php print_r($_SESSION); ?>
    <article class="cardlogin">
        <section class="columnlogin left">
            <h2>Datos inicio sesión </h2>
            <form action="backend/edit_user_login.php" method="post">
                <input type="hidden"  name="id" value="<?php echo $_SESSION['user_id']; ?>">
                <section class="form-group">
                    <label for="usuario" class="control-label">Usuario</label>
                    <section class="col-sm-10">
                        <input type="text" class="form-control" name="usuario" value="<?php echo $_SESSION['usuario'] ?>" required>
                    </section>
                </section>
                <section class="form-group">
                    <label for="clave" class="control-label">Contraseña</label>
                    <section class="col-sm-10">
                        <input type="password" class="form-control" name="clave" value="<?php echo $_SESSION['password'] ?>" required>
                    </section>
                </section>
                <section class="form-group">
                    <label for="clave" class="control-label">Repite Contraseña</label>
                    <section class="col-sm-10">
                        <input type="password" class="form-control" name="clave2" value="<?php echo $_SESSION['password'] ?>" required>
                    </section>
                </section>
                <section class="form-group">
                    <section class="col-sm-offset-2 col-sm-10">
                        <?php if(isset($_SESSION['error'])) echo $_SESSION['error']; ?>
                        <input type="submit" class="btn btn-success btn-block" name="bAceptar" value="Aceptar">
                    </section>
                </section>
            </form>
        </section>
        <section class="columnlogin right">
            <h3>Datos de usuario </h3>
            <form class="form-horizontal" action="backend/edit_user.php" method="post">
                <section class="form-group">
                    <label for="name" class=" control-label">Nombre</label>
                    <section class="col-sm-10">
                        <input type="text" class="form-control" name="name" value="<?php echo $_SESSION['name'] ?>" required>
                    </section>
                </section>
                <section class="form-group">
                    <label for="phone" class=" control-label">Telefono</label>
                    <section class="col-sm-10">
                        <input type="text" class="form-control" name="phone" value="<?php echo $_SESSION['phone'] ?>" required>
                    </section>
                </section>
                <section class="form-group">
                    <label for="city" class=" control-label">Ciudad</label>
                    <section class="col-sm-10">
                        <input type="text" class="form-control" name="city" value="<?php echo $_SESSION['city'] ?>" required>
                    </section>
                </section>
                <section class="form-group">
                    <label for="email" class=" control-label">Email</label>
                    <section class="col-sm-10">
                        <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['email'] ?>" required>
                    </section>
                </section>
                <section class="form-group">
                    <section class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </section>
                </section>
            </form>
        </section>
    </article>
    <?php if ($_SESSION['rol'] == "Admin"){ ?>
        <article class='cardlogin'>
            <?php include 'usuarios.php'; ?>
        </article>
    <?php } ?>
<?php include 'footer.php'; ?>