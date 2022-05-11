<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "web";
    $conexion = mysqli_connect($servername,$username,$password,"$dbname");
        if(!$conexion){
            die('Could not Connect MySql Server:' .mysql_error());
        }
?>