<!DOCTYPE html>
<html lang="es">
<?php session_start(); ?>
<?php
include 'backend/conection.php';
?>
<head>
    <title>Web Arco - LMR </title>
    <meta charset="utf-8" />
    <meta name="author" content="Laura M" />
    <meta name="viewport" content="width=device-width, initial-scale=1 , shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>

</head>
<body>

            <section class="header">
                <img src="images/0_cabecera/img_nature2.jpg" style="display:block; margin:auto; width:100%" class="img-fluid rounded">
            </section>
            <section id="menu">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="index.php" data-toggle="tooltip" title="Home"><img id="logo" src="images/logo2.png" width="80%"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="float:right">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <section class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="nav navbar-nav nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php"> Home </span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="1_A_Bweb.html" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Competiciones</a>
                                <section class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="nacionales.php">Nacionales</a>
                                    <a class="dropdown-item" href="autonomico.php">Auton??micos</a>
                                </section>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Qui??nes somos</a>
                                <section class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="club.php">Nuestro club</a>
                                    <a class="dropdown-item" href="equipo.php">Nuestro equipo</a>
                                    <a class="dropdown-item" href="donde.php">D??nde encontrarnos</a>
                                </section>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="material.php">Material</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="calendario.php">Calendario</a>
                            </li>
                            <?php if(isset($_SESSION['login'])){
                                echo "<li class='nav-item'><a class='nav-link' href='perfil.php'>Perfil</a></li>";
                                echo "<li class='nav-item'><a class='nav-link' href='backend/logout.php'>Logout</a></li>";
                            }else{
                                echo "<li class='nav-item'><a class='nav-link' href='login.php'>Login</a></li>";
                            }
                            ?>
                        </ul>
                    </section>
                </nav>
            </section>
        </body>