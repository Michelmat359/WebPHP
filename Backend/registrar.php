<?php
session_start();
$_SESSION["messageReg"] == "";
$servername='localhost';
$username='root';
$password='';
$dbname = "web";
$conexion = mysqli_connect($servername,$username,$password,"$dbname");

$params = array();
$error = false;
$usuario = trim($_POST['usuario']);
$clave = trim($_POST['clave']);
$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);
$email = trim($_POST['email']);
$adm = trim($_POST['adm']);

$usuario = strip_tags($usuario);
$clave = strip_tags($clave);
$nombre = strip_tags($nombre);
$apellido = strip_tags($apellido);
$email = strip_tags($email);
$adm = strip_tags($adm);
$fecha_alta = date("Y-m-d");

$resultemail = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email ='$email'");
$resultuser = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario ='$usuario'");
if(!empty($resultemail) && !empty($resultuser)) {
    mysqli_query($conexion, "insert into usuarios(usuario, clave, nombre, apellido, email, fecha_alta, adm)  
                values ('$usuario','$clave','$nombre',' $apellido','$email','$fecha_alta','$adm')");
    header("Location: ../inventario.php");
}else if (empty($resultemail) && !empty($resultuser)){
    $_SESSION["messageReg"] = "<p class='text-danger text-center'> Correo ya registrado </p>";
    header("Location: ../registrar.php");
}else{
    $_SESSION["messageReg"] = "<p class='text-danger text-center'> Usuario ya registrado </p>";
    header("Location: ../registrar.php");
}

