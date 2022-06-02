<?php session_start();

include 'conection.php';


if (count($_REQUEST) > 0) {
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $city = $_REQUEST['city'];

$sql = "UPDATE usuarios SET name='$name', email='$email', phone ='$phone', city = '$city' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['message'] = "Usuario actualizado";
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['city'] = $city;
        header("Location: ../perfil.php");
    } else {
        $_SESSION['error'] = "<p class='text-danger text-center'> Error al guardar </p>";
        header("Location: ../perfil.php");
    }
    mysqli_close($conn);
}


?>