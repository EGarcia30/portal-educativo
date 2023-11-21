<?php require_once("Views/layouts/header.php")?>
<main id="contenido">
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">
        <div>
            <div class="text-center">
                <h2>Notas</h2>
                <h3>Estas seguro de Eliminar esta Nota?</h3>
            </div>
            <hr>
            <div class="table-responsive-xxll">
                <table class="table table-dark table-bordered text-center">
                    <tr>
                        <td>ID Notas</td>
                        <td>ID Alumno</td>
                        <td>ID Docente</td>
                        <td>ID Materia</td>
                        <td>Nombre de Materia</td>
                        <td>Notas</td>
                    </tr>
                    <?php
                        if(!empty($datos)){
                            foreach($datos as $dato){?>
                            <tr>
                                <td><?php echo $dato['id_nota']; ?></td>
                                <td><?php echo $dato['id_alumno']; ?></td>
                                <td><?php echo $dato['id_docente']; ?></td>
                                <td><?php echo $dato['id_materia']; ?></td>
                                <td><?php echo $dato['nomMateria']; ?></td>
                                <td><?php echo $dato['nota']; ?></td>
                            </tr>
                    <?php         }
                        }
                    ?>
                </table>
                <form action="" method="post" class="d-flex justify-content-end">
                    <input type="hidden" name="id" value="<?php echo $dato['id_nota']?>">
                    <input type="hidden" name="n" value="eliminarNotas">
                    <input type="submit" value="Eliminar" class="btn btn-danger me-2"> |
                    <a href="index.php?n=indexBtn" class="btn btn-secondary ms-2" value="limpiar">Regresar</a>
                </form>
        </div>
    </div>
</main>
<?php require_once("Views/layouts/footer.php")?>