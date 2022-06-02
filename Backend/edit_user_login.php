<?php session_start();

include 'conection.php';

if (count($_POST) > 0) {
    $id = $_POST['user_id'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $clave2 = $_POST['clave2'];

    if ($clave == $clave2) {
        $sql = "UPDATE login SET usuario='$usuario', clave='$clave' WHERE id='$id'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            $_SESSION['message'] = "Usuario actualizado";
            $_SESSION['usuario'] = $usuario;
            $_SESSION['clave'] = $clave;
            header("Location: ../perfil.php");
        } else {
            $_SESSION['error'] = "<p class='text-danger text-center'> Error al actualizar </p>";
            header("Location: ../perfil.php");
        }
        mysqli_close($conn);

    } else {
        $_SESSION['error'] = "<p class='text-danger text-center'> Las contraseñas no coinciden </p>";
        header("Location: ../perfil.php");
    }
} else {
    $_SESSION['error'] = "<p class='text-danger text-center'> Error al actualizar </p>";
    header("Location: ../perfil.php");
};

?>