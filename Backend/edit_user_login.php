<?php session_start();

include 'conection.php';

if (count($_REQUEST) > 0) {
    $user_id = $_REQUEST['user_id'];
    $usuario = $_REQUEST['usuario'];
    $clave = $_REQUEST['clave'];
    $clave2 = $_REQUEST['clave2'];

    if ($clave == $clave2) {
        $sql = "UPDATE `login` SET `usuario`='$usuario', `clave`='$clave' WHERE id='$user_id'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Usuario actualizado";
            $_SESSION['usuario'] = $usuario;
            $_SESSION['clave'] = $clave;
            header("Location: ../perfil.php");
        } else {
            $_SESSION['message'] = "<p class='text-danger text-center'> Error al actualizar </p>";
            header("Location: ../perfil.php");
        }
        mysqli_close($conn);

    } else {
        $_SESSION['message'] = "<p class='text-danger text-center'> Las contraseñas no coinciden </p>";
        header("Location: ../perfil.php");
    }
} else {
    $_SESSION['message'] = "<p class='text-danger text-center'> Error al actualizar </p>";
    header("Location: ../perfil.php");
};

?>