<?php
$request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
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