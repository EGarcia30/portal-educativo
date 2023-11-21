<?php require_once("Views/layouts/header.php")?>
<main id="contenido">
    <div class="d-flex justify-content-center align-items-center mt-5">
        <form action="" method="post" class="col-8 rounded shadow p-3 p-sm-4">
            <div class="form-horizontal">
                <h2 class="text-center">Ingresar Materia</h2>
                <hr>
                <div class="mt-5">
                    <label for="nombres">Ingresar Nombre de Materia:</label>
                    <input type="text" name="nomMateria" class="form-control" placeholder="Ejemplo Desarrollo de sistemas informáticos web I..">
                </div>

                <hr class="text-black w-100">

                <div>
                    <label class="alert alert-<?php echo $_SESSION["alerta"]?> w-100">
                    <?php echo $_SESSION["Mensaje"]?>                    
                    </label>
                </div>
                
                <input type="submit" value="Ingresar" class="btn btn-success me-2"> |
                <input type="hidden" name="ma" value="ingresarMateria">
                <a href="index.php?ma=ingresar" class="btn btn-outline-dark ms-2 me-2">Limpiar</a> |
                <a href="index.php?ma=index" class="btn btn-secondary ms-2">Regresar</a>
            </div>
        </form>

    </div>
</main>
<?php require_once("Views/layouts/footer.php")?>