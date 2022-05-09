<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "login_usuarios";
    $conexion = mysqli_connect($servername,$username,$password,"$dbname");
        if(!$conexion){
            die('Could not Connect MySql Server:' .mysql_error());
        }
?>