<?php include 'menu.php'; ?>
    <!--CONTENIDO DE LA PÁGINA-->
    <article class="cardlogin">
        <section class="columnlogin left">
            <img src="images/logo.png" class="imagelogo">
            <h2>Login</h2>
            <form action="backend/login.php" method="post">
                <section class="form-group">
                    <input type="usuario" class="form-control input-lg" name="usuario" placeholder="Usuario" required>
                </section>
                <section class="form-group">
                    <input type="password" class="form-control input-lg" name="clave" placeholder="Contraseña" required>
                </section>
                    <input type="submit" class="btn btn-success btn-block" name="bAceptar" value="Aceptar">
            </form>
                <?php if(isset($_SESSION['error'])) {echo $_SESSION['error']; session_destroy();}?>
        </section>
        <section class="columnlogin right">
            <h3>Crear cuenta</h3><hr />
            <form method="post" action="backend/create_user.php" method="POST" enctype="multipart/form-data">
                <section class="form-group">
                    <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
                </section>
                <section class="form-group">
                    <input type="password" class="form-control" name="clave" placeholder="Contraseña" required>
                </section>
                <section class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Nombre" required>
                </section>
                <section class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Telefono" required>
                </section>
                <section class="form-group">
                    <input type="text" class="form-control" name="city" placeholder="Ciudad" required>
                </section>
                 <section class="form-group">
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email" required>
                </section>
              <input type="submit" class="btn btn-success btn-block" name="registrar" value="Registrar Usuario">
            </form>
            <?php if(isset($_SESSION['error2'])) {echo $_SESSION['error']; session_destroy();}?>
        </section>
    </article>
<?php include 'footer.php'; ?>