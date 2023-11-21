<?php require_once("Views/layouts/headerAlu.php")?>
<main id="contenido">
    <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
        <form action="" method="post" class="col-8 rounded shadow p-3 p-sm-4">
            <div class="form-horizontal">
                <h2 class="text-center">Inscribir Materia</h2>
                <hr>
                <div class="mt-5">
                    <label for="idA">Ingresar tu Id de Alumno:</label>
                    <input type="number" step="1" name="idA" class="form-control" placeholder="Ejemplo 1..">
                </div>

                <div class="mt-5">
                    <label for="idD">Ingresar Id Docente que imparte la materia:</label>
                    <input type="number" step="1" name="idD" class="form-control" placeholder="Ejemplo 1..">
                </div>

                <div class="mt-5">
                    <label for="idM">Ingresar Id Materia:</label>
                    <input type="number" step="1" name="idM" class="form-control" placeholder="Ejemplo 1..">
                </div>

                <div class="mt-5 mb-2">
                    <label for="nomMateria">Ingresar Nombre de Materia:</label>
                    <input type="text" name="nomMateria" class="form-control" placeholder="Ejemplo Desarrollo de sistemas informáticos web I..">
                </div>


                <hr class="text-black w-100">

                <div>
                    <label class="alert alert-<?php echo $_SESSION["alerta"]?> w-100">
                    <?php echo $_SESSION["Mensaje"]?>                    
                    </label>
                </div>

                <input type="submit" value="Ingresar" class="btn btn-success me-2"> |
                <input type="hidden" name="ins" value="ingresarInscripcion">
                <a href="index.php?ins=index" class="btn btn-secondary ms-2">Limpiar</a>
            </div>
        </form>
    </div>
</main>
<?php require_once("Views/layouts/footerAlu.php")?>