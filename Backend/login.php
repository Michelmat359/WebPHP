<?php session_start();

include 'conection.php';
if (count($_REQUEST) > 0) {

    $usuario = $_REQUEST['usuario'];
    $clave = $_REQUEST['clave'];
    $login = mysqli_query($conn, "select * from login where usuario='$usuario' and clave='$clave '");
    if (mysqli_num_rows($login) > 0) {
        $result = $login->fetch_assoc();
        $user_id = $result['id'];
        $_SESSION['user_id'] = $user_id;
        $sql2 = "SELECT * FROM usuarios WHERE user_id ='$user_id'";
        $result = mysqli_query($conn, $sql2);
        $row = mysqli_fetch_array($result);
        if ($row > 0) {
            $_SESSION["message"] = "Logueado";
            $_SESSION['login'] = true;
            $_SESSION['usuario'] = $_REQUEST['usuario'];
            $_SESSION['password'] = $_REQUEST['clave'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['city'] = $row['city'];
            $_SESSION['rol'] = $row['adm'];
            header("Location: ../perfil.php");
        } else {
            $_SESSION['error'] = "<p class='text-danger text-center'> Error al encontrar el usuario </p>";
            header("Location: ../login.php");
        }
        mysqli_close($conn);
    } else {
        $_SESSION['error'] = "<p class='text-danger text-center'> Usuario o contraseña incorrectos </p>";
        header("Location: ../login.php");
    }
}

?>