<?php require_once("Views/layouts/header.php")?>
<main id="contenido">
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">
        <div>
            <div class="text-center">
                <h2>Alumno</h2>
                <h3>Estas seguro de Eliminar este Alumno?</h3>
            </div>
            <hr>
            <div class="table-responsive-xxll">
                <table class="table table-dark table-bordered text-center">
                    <tr>
                        <td>ID</td>
                        <td>Nombres</td>
                        <td>Apellidos</td>
                        <td>Genero</td>
                        <td>Edad</td>
                        <td>Usuario</td>
                        <td>Clave</td>
                        <td>Tipo Usuario</td>
                    </tr>
                    <?php
                        if(!empty($datos)){
                            foreach($datos as $dato){?>
                            <tr>
                                <td><?php echo $dato['id_alumno']; ?></td>
                                <td><?php echo $dato['nombres']; ?></td>
                                <td><?php echo $dato['apellidos']; ?></td>
                                <td><?php echo $dato['genero']; ?></td>
                                <td><?php echo $dato['edad']; ?></td>
                                <td><?php echo $dato['nUsuario']; ?></td>
                                <td><?php echo $dato['clave']; ?></td>
                                <td><?php echo $dato['tipoUsuario']; ?></td>
                            </tr>
                    <?php         }
                        }
                    ?>
                </table>
                <form action="" method="post" class="d-flex justify-content-end">
                    <input type="hidden" name="id" value="<?php echo $dato['id_alumno']?>">
                    <input type="hidden" name="a" value="eliminarAlumno">
                    <input type="submit" value="Eliminar" class="btn btn-danger me-2"> |
                    <a href="index.php?a=indexBtn" class="btn btn-secondary ms-2" value="limpiar">Regresar</a>
                </form>
        </div>
    </div>
</main>
<?php require_once("Views/layouts/footer.php")?>