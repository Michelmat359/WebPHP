<?php
session_start();
require_once "Backend/conexion.php";
if(isset($_SESSION['user_id'])!="") {
    header("Location: dashboard.php");
}
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['usuario']);
    $password = mysqli_real_escape_string($conn, $_POST['clave']);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 6) {
        $password_error = "Password must be minimum of 6 characters";
    }
    $result = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '" . usuario. "' and clave = '" . clave . "'");
    if(!empty($result)){
        if ($row = mysqli_fetch_array($result)) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['nombre'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_mobile'] = $row['mobile'];
            header("Location: usuario.php");
        }
    }else {
        $error_message = "Incorrect Email or Password!!!";
    }
}
?>
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

<!--PIE DE PÁGINA-->
<footer>
    <?php
        echo "<p>Laura Moya Ruiz &copy; 1999-" . date("Y") . " All rigth reserved</p>";
    ?>

</footer>
<!-- jQuery (es necesario para plugins JavaScript de Bootstrap  ) -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>