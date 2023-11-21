<?php require_once("Views/layouts/header.php")?>
<main id="contenido">
    <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
        <?php 
            if(!empty($datos)){
                foreach ($datos as $dato) {?>

                <form action="" method="post" class="col-8 rounded shadow p-3 p-sm-4">
                    <div class="form-horizontal">
                        <h2 class="text-center">Actualizar Materia</h2>
                        <hr>
                        <div class="mt-5 mb-2">
                            <label for="nombres">Ingresar Nombre de Materia:</label>
                            <input type="text" name="nomMateria" class="form-control" value="<?php echo $dato['nomMateria'] ?>">
                        </div>

                        <hr class="text-black w-100">

                        <input type="submit" value="Actualizar" class="btn btn-success me-2"> |
                        <input type="hidden" name="ma" value="editarMateria">
                        <input type="hidden" name="id" value="<?php echo $dato['id_materia']?>">
                        <a href="index.php?ma=index" class="btn btn-secondary ms-2">Regresar</a>
                    </div>
                </form>
        <?php        }

            }
        ?>
    </div>
</main>
<?php require_once("Views/layouts/footer.php")?>