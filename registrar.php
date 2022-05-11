<!-- BEGIN mynav.php INCLUDE -->
<?php include 'menu.php'; ?>
<!-- END mynav.php INCLUDE -->
<main>
<!--    <div class="container">-->
<!--        <div class="row" id="contact">-->
<!--            <div class="col-sm-12 col-md-6 col-lg-6">-->
<!--                <h3>Login</h3>-->
<!--                <hr/>-->
<!--                <form method="post" action="Backend/login.php" method="POST" enctype="multipart/form-data">-->
<!--                    <div class="form-group">-->
<!--                        <input type="usuario" class="form-control input-lg" name="usuario" placeholder="Usuario"-->
<!--                               required>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <input type="password" class="form-control input-lg" name="clave" placeholder="Contraseña"-->
<!--                               required>-->
<!--                    </div>-->
<!--                    --><?php //if (isset($_POST["message"])) echo $_POST["message"]; ?>
<!--                    <input type="submit" class="btn btn-success btn-block" name="bAceptar" value="Aceptar">-->
<!--                </form>-->
<!--            </div> -->
<!--            <div class="col-sm-12 col-md-6 col-lg-6">-->
<!--                <h3>Crear cuenta</h3>-->
<!--                <hr/>-->
<!--                <form method="post" action="Backend/registrar.php" method="POST" enctype="multipart/form-data">-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <input type="password" class="form-control" name="clave" placeholder="Contraseña" required>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" class="form-control" name="apellido" placeholder="Apellido" required>-->
<!--                    </div>-->
<!---->
<!--                    <div class="form-group">-->
<!--                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp"-->
<!--                               placeholder="Email" required>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <select name="adm" class="form-control">-->
<!--                            <option value="Usuario">Usuario</option>-->
<!--                            <option value="Vendedor">Vendedor</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!---->
<!--                    <input type="submit" class="btn btn-success btn-block" name="registrar" value="Registrar Usuario">-->
<!--                </form>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->

    <div class="container">
        <form class="form-signin" method="post" action="Backend/login.php" method="POST" enctype="multipart/form-data">
            <h1 class="form-signin-heading">Inciar Sesión </h1>
            <div class="form-group">
            <input type="text" class="form-control input-lg" name="usuario" placeholder="Usuario" required="" autofocus="">
             <small id="emailHelp" class="form-text text-muted">Habla con el administrador para que te proprocione credenciales.</small>

            </div>
            <div class="form-group">
            <input type="password" class="form-control input-lg" name="clave" placeholder="Contraseña" required=""/>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
        </form>
    </div>

</main>
<footer>
    <?php
    echo "<p>Laura Moya Ruiz &copy; 1999-" . date("Y") . " All rigth reserved</p>";
    ?>

</footer>
<!-- jQuery (es necesario para plugins JavaScript de Bootstrap  ) -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.js"></script>
