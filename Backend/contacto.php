<?php session_start();

    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "web";
    $conexion = mysqli_connect($servername,$username,$password,"$dbname");

    mysqli_query($conexion, "insert into contacto(nombre,email,asunto, mensaje)  
                values ('$_REQUEST[nombre]','$_REQUEST[email]','$_REQUEST[asunto]','$_REQUEST[mensaje]')") or
    die("Problemas en el select" . mysqli_error($conexion));

    mysqli_close($conexion);

    echo $_SESSION['exito'] = "El contacto fue enviado.";

?>