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

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Set the INSERT SQL data
$sql = "INSERT INTO arcos (name, tipo, precio, cantidad)
	VALUES ('".$name."', '".$tipo."', '".$precio."', '".$cantidad."')";

// Process the query so that we will save the date of birth
if ($mysqli->query($sql)) {
    echo "Employee has been successfully created.";
} else {
    return "Error: " . $sql . "<br>" . $mysqli->error;
}

// Close the connection after using it
$mysqli->close();
?>