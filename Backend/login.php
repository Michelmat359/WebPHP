<?php session_start();

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "web";
$conexion = mysqli_connect($servername, $username, $password, $dbname);

$registros = mysqli_query($conexion, "select * from usuarios where usuario='$_REQUEST[usuario]' and clave='$_REQUEST[password]'");

$result = $registros->fetch_assoc();
if (mysqli_fetch_array($registros)) {
    $_SESSION["message"] = "Logueado";
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $_REQUEST['usuario'];
    $_SESSION['password'] = $_REQUEST['password'];
    $_SESSION['id'] = $result['id'];
    $_SESSION['nombre'] = $result['nombre'];
    $_SESSION['apellido'] = $result['apellido'];
    $_SESSION['email'] = $result['email'];
    $_SESSION['rol'] = $result['adm'];
    header("Location: ../perfil.php");
} else {
    $_SESSION['error'] = "<p class='text-danger text-center'> Usuario o contraseña erronea </p>";
    header("Location: ../login.php");
}
mysqli_close($conexion);
?>

