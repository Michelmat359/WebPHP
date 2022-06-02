<?php
include 'conection.php';

//AÑADIR UN USUARIO
if (count($_POST) > 0) {
    if ($_POST['type'] == 1) {
        $name = $_POST['name'];
        $clave = $_POST['clave'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $adm = $_POST['adm'];
        $sql2 = "INSERT INTO `login`(`usuario`, `clave`) VALUES ('$name','$clave')";
        if (mysqli_query($conn, $sql2)) {
            $sql_id = "SELECT id FROM login WHERE usuario ='$name'";
            if (mysqli_query($conn, $sql_id)){
                $result = mysqli_query($conn, $sql_id);
                $row = mysqli_fetch_array($result);
                $user_id = $row['id'];
                $sql = "INSERT INTO `usuarios`( `user_id`,`name`, `email`,`phone`,`city`, `adm`)
                    VALUES ('$user_id','$name','$email','$phone','$city','$adm')";
                if (mysqli_query($conn, $sql)) {
                        echo json_encode(array("statusCode" => 200));}
                    else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
//ACTUALIZAR UN USUARIO
if (count($_POST) > 0) {
    if ($_POST['type'] == 2) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $adm = $_POST['adm'];
        $sql = "UPDATE `usuarios` SET `name`='$name',`email`='$email',`phone`='$phone',`city`='$city',`adm`='$adm' WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            //Mensaje para que JQUERY sepa que funciona bien
            echo json_encode(array("statusCode" => 200));
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
// ELIMINAR UN USUARIO
if (count($_POST) > 0) {
    if ($_POST['type'] == 3) {
        $id = $_POST['id'];
        $sql = "DELETE FROM `usuarios` WHERE id=$id ";
        if (mysqli_query($conn, $sql)) {
            echo $id;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
//ELIMINAR VARIOS A LA VEZ
if (count($_POST) > 0) {
    if ($_POST['type'] == 4) {
        $id = $_POST['id'];
        $sql = "DELETE FROM `usuarios` WHERE id in ($id)";
        if (mysqli_query($conn, $sql)) {
            echo $id;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}

?>