<?php

$id = $_GET['id'];

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "web";
$conexion = mysqli_connect($servername, $username, $password, "$dbname");


// sql to delete a record
$sql = "DELETE FROM arcos WHERE id = $id";
$delete = mysqli_query($conexion, "DELETE FROM arcos WHERE id = $id");

if ($delete) {
    mysqli_close($conexion);
header('Location: ../inventario.php'); //If book.php is your main page where you list your all records
exit;
} else {
    $_POST["message"] = "<p class='text-danger text-center'> Error eliminado arco </p>";
    header("Location: ../inventario.php");
}

?>