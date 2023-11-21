<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap y css-->
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/appweb.css">

    <title><?php echo $_SESSION["Titulo"] ?></title>
</head>
<body id="fondo">

    <div class="row position-absolute bg-light opacity-75 p-5 rounded">  
        <div class="col-12">
            <h1 class="text-center pb-3">PORTAL EDUCATIVO</h1>
            <div class="d-flex justify-content-center align-items-center p-5">
                <img src="Assets/img/img3.jpg" alt="portal" class="img_portal me-5">
                <form action="" method="post" class="ms-5">
                    <div class="mb-5">
                        <label for="Usuario">Ingresar Usuario:</label>
                        <input type="text" name="Usuario" class="form-control" placeholder="Ejemplo Garcia30">
                    </div>
                   
                    <div class="mt-5 mb-2">
                        <label for="clave">Ingresar Contraseña:</label>
                        <input type="password" name="clave" class="form-control">
                    </div>
                    <hr class="bg-black w-100">

                    <label for="" class="alert alert-<?php echo $_SESSION["alerta"] ?> w-100 mb-0"><?php echo $_SESSION["Mensaje"] ?></label>
                    
                    <input type="submit" class="btn btn-primary w-100 mt-3" 
                    name="btn" value="Iniciar Sesion">
                    <input type="hidden" name="m" value="entrar">
                </form>
            </div>
        </div>
    </div>
    
    <!--Javascript de bootstrap-->
    <script src="Assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>