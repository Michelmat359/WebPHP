<?php session_start();

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "web";
$conexion = mysqli_connect($servername, $username, $password, "$dbname");


$registros = mysqli_query($conexion, "select * from usuarios where usuario='$_REQUEST[usuario]' && clave='$_REQUEST[clave]'");

if (mysqli_fetch_array($registros)) {
    $_SESSION["message"] = "Existo";
    header("Location: ../inventario.php");
} else {
    $_POST["message"] = "<p class='text-danger text-center'> Usuario o contraseña erronea </p>";
    header("Location: ../registrar.php");
}
mysqli_close($conexion);
?>



