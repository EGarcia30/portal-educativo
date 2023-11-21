<?php require_once("Views/layouts/header.php")?>
<main id="contenido">
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">
        <div>
            <div class="text-center">
                <h2>Inscripción</h2>
                <h3>Estas seguro de Eliminar esta Inscripción?</h3>
            </div>
            <hr>
            <div class="table-responsive-xxll">
                <table class="table table-dark table-bordered text-center">
                    <tr>
                        <td>ID Inscripcion</td>
                        <td>ID Alumno</td>
                        <td>ID Docente</td>
                        <td>ID Materia</td>
                        <td>Nombre de Materia</td>
                    </tr>
                    <?php
                        if(!empty($datos)){
                            foreach($datos as $dato){?>
                            <tr>
                                <td><?php echo $dato['id_inscripcion']; ?></td>
                                <td><?php echo $dato['id_alumno']; ?></td>
                                <td><?php echo $dato['id_docente']; ?></td>
                                <td><?php echo $dato['id_materia']; ?></td>
                                <td><?php echo $dato['nomMateria']; ?></td>
                            </tr>
                    <?php         }
                        }
                    ?>
                </table>
                <form action="" method="post" class="d-flex justify-content-end">
                    <input type="hidden" name="id" value="<?php echo $dato['id_inscripcion']?>">
                    <input type="hidden" name="i" value="eliminarInscripcion">
                    <input type="submit" value="Eliminar" class="btn btn-danger me-2"> |
                    <a href="index.php?i=indexBtn" class="btn btn-secondary ms-2" value="limpiar">Regresar</a>
                </form>
        </div>
    </div>
</main>
<?php require_once("Views/layouts/footer.php")?>