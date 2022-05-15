<?php

$request = $_REQUEST;
$id = $request['id'];
$name = $request['name'];
$tipo = $request['tipo'];
$precio = $request['precio'];
$cantidad = $request['cantidad'];

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "web";
$conexion = mysqli_connect($servername, $username, $password, "$dbname");


// sql to delete a record
$sql = "UPDATE arcos SET name='".$name."', tipo='".$tipo."', precio='".$precio."', cantidad='".$cantidad."' WHERE id='".$id."'";

$edit = mysqli_query($conexion, $sql);

if ($edit) {
    mysqli_close($conexion);
    header('Location: ../inventario.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    return "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

?>