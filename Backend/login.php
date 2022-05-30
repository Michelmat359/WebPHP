<?php session_start();

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "web";
$conexion = mysqli_connect($servername, $username, $password, $dbname);


$registros = mysqli_query($conexion, "select * from usuarios where usuario='$_REQUEST[usuario]' && clave='$_REQUEST[password]'");

if (mysqli_fetch_array($registros)) {
    $_SESSION["message"] = "Logueado";
    $_SESSION['login'] = true;
    header("Location: ../perfil.php");
} else {
    $_SESSION['error'] = "<p class='text-danger text-center'> Usuario o contraseña erronea </p>";
    header("Location: ../login.php");
}
mysqli_close($conexion);
?>

