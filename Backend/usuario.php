<?php
    session_start();
    require_once "conexion.php";
    if(isset($_SESSION['user_id'])!="") {
        header("Location: dashboard.php");
    }
    if (isset($_POST['login'])) {
        $email = mysqli_real_escape_string($conn, $_POST['usuario']);
        $password = mysqli_real_escape_string($conn, $_POST['clave']);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $email_error = "Please Enter Valid Email ID";
        }
        if(strlen($password) < 6) {
            $password_error = "Password must be minimum of 6 characters";
        }
        $result = mysqli_query($conn, "SELECT * FROM users WHERE usuario = '" . usuario. "' and pass = '" . clave . "'");
        if(!empty($result)){
            if ($row = mysqli_fetch_array($result)) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['nombre'];
                $_SESSION['user_email'] = $row['email'];
                $_SESSION['user_mobile'] = $row['mobile'];
                header("Location: ../usuario.php");
            }
        }else {
            $error_message = "Incorrect Email or Password!!!";
        }
    }
?>