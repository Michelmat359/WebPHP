<!--MENÚ-->
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Actividad_10</title>
    <meta charset="utf-8" />
    <meta name="author" content="Laura M" />
    <meta name="viewport" content="width=device-width, initial-scale=1 , shrink-to-fit=no">
    <link rel="stylesheet" href="css/cssParaRetocar.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- BOOTSTRAP  -->
    <link rel="stylesheet" href="css/bootstrap.css" >

</head>

<body id="global">
<!--CABECERA-->

<header class="cabecera">
    <img src="img/img_nature2.jpg" id="img-header">
</header>
<nav class="menu">
    <ul>
        <img id="logo" src="img/logo2.png">
        <!--<li id="right"><img id="logo" src="logo2.png"/></li>-->
<!--        --><?php //if ($_SESSION['adm']== "Admin"){
//            echo "<li id='menu_option'><a href='correos.html'>Correos</a></li>"
//            ;}
//        ?>
        <li id="menu_option"><a href="usuario.php">Usuario</a></li>
        <li id="menu_option"><a href="Contacto.php">Contacto</a></li>
        <li id="menu_option"><a href="index.php" class="active">Home</a></li>
    </ul>
</nav>