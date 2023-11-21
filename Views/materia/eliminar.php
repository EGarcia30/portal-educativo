<?php require_once("Views/layouts/header.php")?>
<main id="contenido">
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">
        <div>
            <div class="text-center">
                <h2>Materia</h2>
                <h3>Estas seguro de Eliminar esta Materia?</h3>
            </div>
            <hr>
            <div class="table-responsive-xxll">
                <table class="table table-dark table-bordered text-center">
                    <tr>
                        <td>ID</td>
                        <td>Nombre de Materia</td>
                    </tr>
                    <?php
                        if(!empty($datos)){
                            foreach($datos as $dato){?>
                            <tr>
                                <td><?php echo $dato['id_materia']; ?></td>
                                <td><?php echo $dato['nomMateria']; ?></td>
                            </tr>
                    <?php         }
                        }
                    ?>
                </table>
                <form action="" method="post" class="d-flex justify-content-end">
                    <input type="hidden" name="id" value="<?php echo $dato['id_materia']?>">
                    <input type="hidden" name="ma" value="eliminarMateria">
                    <input type="submit" value="Eliminar" class="btn btn-danger me-2"> |
                    <a href="index.php?ma=indexBtn" class="btn btn-secondary ms-2" value="limpiar">Regresar</a>
                </form>
        </div>
    </div>
</main>
<?php require_once("Views/layouts/footer.php")?>