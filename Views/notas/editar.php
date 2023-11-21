<?php require_once("Views/layouts/header.php")?>
<main id="contenido">
    <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
        <?php 
            if(!empty($datos)){
                foreach ($datos as $dato) {?>

                <form action="" method="post" class="col-8 rounded shadow p-3 p-sm-4">
                    <div class="form-horizontal">
                        <h2 class="text-center">Actualizar Notas</h2>
                        <hr>
                        <div class="mt-5">
                            <label for="idA">Ingresar Id Alumno:</label>
                            <input type="number" step="1" name="idA" class="form-control" value="<?php echo $dato['id_alumno'] ?>">
                        </div>

                        <div class="mt-5">
                            <label for="idD">Ingresar Id Docente:</label>
                            <input type="number" step="1" name="idD" class="form-control" value="<?php echo $dato['id_docente'] ?>">
                        </div>

                        <div class="mt-5">
                            <label for="idM">Ingresar Id Materia:</label>
                            <input type="number" step="1" name="idM" class="form-control" value="<?php echo $dato['id_materia'] ?>">
                        </div>

                        <div class="mt-5 mb-2">
                            <label for="nomMateria">Ingresar Nombre de Materia:</label>
                            <input type="text" name="nomMateria" class="form-control" value="<?php echo $dato['nomMateria']?>">
                        </div>

                        <div class="mt-5 mb-2">
                            <label for="nota">Ingresar Nota final:</label>
                            <input type="number" step="0.1" name="nota" class="form-control" value="<?php echo $dato['nota']?>">
                        </div>


                        <hr class="text-black w-100">

                        <input type="submit" value="Actualizar" class="btn btn-success me-2"> |
                        <input type="hidden" name="n" value="editarNotas">
                        <input type="hidden" name="id" value="<?php echo $dato['id_nota']?>">
                        <a href="index.php?n=index" class="btn btn-secondary ms-2">Regresar</a>
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