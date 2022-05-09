<!-- BEGIN mynav.php INCLUDE -->
    <?php include 'menu.php';?>
<!-- END mynav.php INCLUDE -->
<main>
    <div class="container">
        <!-- img logo -->
        <img id="logo_med" src="img/logo_med.png" style="margin: auto" class="img-responsive">
        <h3>Login </h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post">
                <fieldset>
                    <input type="usuario" class="form-control input-lg" name="usuario" placeholder="Usuario" required>
                </fieldset>
                <fieldset>
                    <input type="password" class="form-control input-lg" name="clave" placeholder="Contraseña" required>
                </fieldset>
                <fieldset>
                    <input type="submit" class="btn btn-success btn-block" name="bAceptar" value="Aceptar">
                </fieldset>
            </form>
            <hr><p>¿Usuario nuevo? <a href="index.php?ctl=registrar">Crear cuenta</a>.</p>


        <?php if ($_SESSION['adm']== "Admin"){
            echo $_SESSION['user_id'];
            echo "<a href='index.php?ctl=listado'>Listar usuarios</a>"
                . "<a href='index.php?ctl=agregar'>Añadir usuario</a>"
            ;}
        ?>

    </div><!-- Termina caja login -->

</main>
<footer>
    <?php
    echo "<p>Laura Moya Ruiz &copy; 1999-" . date("Y") . " All rigth reserved</p>";
    ?>

</footer>
<!-- jQuery (es necesario para plugins JavaScript de Bootstrap  ) -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.js"></script>
