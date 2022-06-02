<?php
session_start();

include 'conection.php';
$_SESSION["messageReg"] == "";

if(count($_POST)>0){
    $user=$_POST['usuario'];
    $clave=$_POST['clave'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];
    $sql_email = "SELECT * FROM usuarios WHERE email ='$email'" ;
    $sql_user = "SELECT * FROM usuarios WHERE usuario ='$user'" ;

    $resultemail = mysqli_query($conn, $sql_user);
    $resultuser = mysqli_query($conn, $sql_email);
    if ( mysqli_num_rows($resultuser) > 0 ) {
        $_SESSION["messageReg"] = "<p class='text-danger text-center'> El usuario ya existe </p>";
        header("Location: ../login.php");
    } else if ( mysqli_num_rows($resultemail) > 0 ) {
        $_SESSION["messageReg"] = "<p class='text-danger text-center'> El email ya existe </p>";
        header("Location: ../login.php");
    } else {

        $sql2 = "INSERT INTO `login`(`usuario`, `clave`) VALUES ('$user','$clave')";

        if (mysqli_query($conn, $sql2)) {

            $sql_id = "SELECT id FROM login WHERE usuario ='$user'";
            if (mysqli_query($conn, $sql_id)){
                $result = mysqli_query($conn, $sql_id);
                $row = mysqli_fetch_array($result);
                $user_id = $row['id'];
                $sql = "INSERT INTO `usuarios`(`name`, `email`, `phone`, `city`, `user_id`, `adm`) VALUES ('$name','$email','$phone','$city','$user_id','Alumno')";
                if (mysqli_query($conn, $sql)) {
                    $_SESSION["message"] = "Logueado";
                    $_SESSION['login'] = true;
                    $_SESSION['usuario'] = $user;
                    $_SESSION['password'] = $clave;
                    $_SESSION['id'] = $user_id;
                    $_SESSION['name'] = $name;
                    $_SESSION['phone'] = $phone;
                    $_SESSION['email'] = $email;
                    $_SESSION['city'] = $city;
                    $_SESSION['rol'] = "Alumno";
                    header("Location: ../perfil.php");
                } else {
                    $_SESSION["messageReg"] = "<p class='text-danger text-center'> Error al guardar </p>";
                    header("Location: ../login.php");
                }
            } else {
                $_SESSION["messageReg"] = "<p class='text-danger text-center'> Error al guardar </p>";
                header("Location: ../login.php");
            }

        } else {
            $_SESSION["messageReg"] = "<p class='text-danger text-center'> Error al registrar </p>";
            header("Location: ../login.php");
        }

        mysqli_close($conn);
    }
}



