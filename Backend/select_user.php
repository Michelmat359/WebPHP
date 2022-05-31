<?php
$request = $_REQUEST;
$id = $request['id'];

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "web";

$mysqli = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM arcos WHERE id='".$id."'";
$results = $mysqli->query($sql);
$row = $results->fetch_assoc();
$results->free_result();
$mysqli->close();

echo json_encode($row);

?>