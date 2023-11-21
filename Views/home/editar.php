<?php require_once("Views/layouts/header.php")?>
<main id="contenido">
    <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
        <?php 
            if(!empty($datos)){
                foreach ($datos as $dato) {?>

                <form action="" method="post" class="col-8 rounded shadow p-3 p-sm-4">
                    <div class="form-horizontal">
                        <h2 class="text-center">Actualizar Alumno</h2>
                        <hr>
                        <div class="mt-5">
                            <label for="nombres">Ingresar Nombres:</label>
                            <input type="text" name="nombres" class="form-control" value="<?php echo $dato['nombres'] ?>">
                        </div>
                        <div class="mt-5">
                            <label for="apellidos">Ingresar Apellidos:</label>
                            <input type="text" name="apellidos" class="form-control" value="<?php echo $dato['apellidos']?>">
                        </div>
                        <div class="mt-5">
                            <label for="genero">Ingresar Genero:</label>
                            <input type="text" name="genero" class="form-control" value="<?php echo $dato['genero']?>">
                        </div>
                        <div class="mt-5">
                            <label for="edad">Ingresar Edad:</label>
                            <input type="number" step="1" name="edad" class="form-control" value="<?php echo $dato['edad']?>">
                        </div>
                        <div class="mt-5">
                            <label for="nUsuario">Ingresar Usuario:</label>
                            <input type="text" name="nUsuario" class="form-control" value="<?php echo $dato['nUsuario']?>">
                        </div>
                        <div class="mt-5 mb-2">
                            <label for="clave">Ingresar Contraseña:</label>
                            <input type="text" name="clave" class="form-control" value="<?php echo $dato['clave']?>">
                        </div>

                        <hr class="text-black w-100">

                        <input type="submit" value="Actualizar" class="btn btn-success me-2"> |
                        <input type="hidden" name="a" value="editarAlumno">
                        <input type="hidden" name="id" value="<?php echo $dato['id_alumno']?>">
                        <a href="index.php?a=index" class="btn btn-secondary ms-2">Regresar</a>
                    </div>
                </form>
        <?php        }

            }
        ?>
        <form action="" method="post">

        </form>
    </div>
</main>
<?php require_once("Views/layouts/footer.php")?>