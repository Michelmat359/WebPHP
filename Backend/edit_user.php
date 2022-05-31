<?php

$_REQUEST;
$id = $_REQUEST['id'];
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$email = $_REQUEST['email'];


$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "web";
$conexion = mysqli_connect($servername, $username, $password, "$dbname");


// sql to delete a record
$sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', email='$email' WHERE id='$id'";

$edit = mysqli_query($conexion, $sql);

if ($edit) {
    mysqli_close($conexion);
    $_SESSION['id'] = $id ;
    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellido'] = $apellido;
    $_SESSION['email'] = $email;
    header('Location: ../perfil.php');
    exit;
} else {
    $_SESSION['error'] = "<p class='text-danger text-center'> Error al guardar </p>";
    header("Location: ../perfil.php");
}

?>