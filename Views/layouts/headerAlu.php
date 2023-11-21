<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap y css-->
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/appweb.css">
    <link rel="stylesheet" href="Assets/css/index.css">
    <link rel="stylesheet" href="Assets/css/pg-maestra.css">

    <!--Iconos de bootstrap por cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title><?php echo $_SESSION["Titulo"] ?></title>
</head>
<body>

<nav id="nav_vertical" class="navbar navbar-expand navbar-dark bg-black d-flex flex-column align-items-center overflow-visible">
        <!--Logo y nombre-->
        <div class="container-fluid d-flex flex-column p-0">
            <a class="navbar-brand d-flex flex-column align-items-center text-white fw-bolder mt-5 me-0">
                <img src="Assets/img/img3.jpg" class="rounded mb-2 logo__img" alt="logo" />
                Portal Educativo
            </a>

            <hr class="w-75" />

            <!--Contenido del menu de navegacion-->
            <ul class="navbar-nav d-flex flex-column mt-5 ms-md-2 ms-0 ">
                <li class="nav-item w-100 mt-5">
                    <a href="index.php?in=index" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item w-100 mt-5">
                    <a href="index.php?mat=index" class="nav-link">Materias Disponibles</a>
                </li>
                <li class="nav-itemw-100 mt-5">
                    <a href="index.php?ins=index" class="nav-link">Inscribir materia</a>
                </li>
                <li class="nav-item w-100 mt-5">
                    <a href="index.php?vn=index" class="nav-link">Ver Notas</a>
                </li>
                <li class="nav-item w-100 mt-5">
                    <a href="cerrarsesion.php" class="nav-link">Cerrar Sesion</a>
                </li>

            </ul>
        </div>
    </nav>

     <!--Navegacion horizontal-->
    <section id="nav_horizontal" class="d-flex justify-content-between align-items-center bg-black text-white">
        <!--boton del menu-->
        <button id="menu-btn" class="btn btn-primary"><i class="bi bi-list"></i></button>
        <!--tipo de usuario activo-->
        <div class="me-3">
            <b class="me-1"><?php echo $_SESSION["nUsuario"]; ?></b>(<?php echo $_SESSION["tipoUsuario"]; ?>)
        </div>
    </section>
    
