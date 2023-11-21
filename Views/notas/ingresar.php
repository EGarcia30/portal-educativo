<?php require_once("Views/layouts/header.php")?>
<main id="contenido">
    <div class="d-flex justify-content-center align-items-center mt-5">
        <form action="" method="post" class="col-8 rounded shadow p-3 p-sm-4">
            <div class="form-horizontal">
                <h2 class="text-center">Ingresar Notas</h2>
                <hr>
                <div class="mt-5">
                    <label for="idAlumno">Ingresar Id Alumno:</label>
                    <input type="number" step="1" name="idAlumno" class="form-control" placeholder="Ejemplo 1..">
                </div>

                <div class="mt-5">
                    <label for="idDocente">Ingresar Id Docente:</label>
                    <input type="number" step="1" name="idDocente" class="form-control" placeholder="Ejemplo 1..">
                </div>

                <div class="mt-5">
                    <label for="idMateria">Ingresar Id Materia:</label>
                    <input type="number" step="1" name="idMateria" class="form-control" placeholder="Ejemplo 1..">
                </div>

                <div class="mt-5">
                    <label for="nomMateria">Ingresar Nombre de Materia:</label>
                    <input type="text" name="nomMateria" class="form-control" placeholder="Ejemplo Desarrollo de sistemas informáticos web I..">
                </div>

                <div class="mt-5 mb-2">
                    <label for="nota">Ingresar Nota final:</label>
                    <input type="number" step="0.1" name="nota" class="form-control" placeholder="Ejemplo 10..">
                </div>

                <hr class="text-black w-100">

                <div>
                    <label class="alert alert-<?php echo $_SESSION["alerta"]?> w-100">
                    <?php echo $_SESSION["Mensaje"]?>                    
                    </label>
                </div>
                <input type="submit" value="Ingresar" class="btn btn-success me-2"> |
                <input type="hidden" name="n" value="ingresarNotas">
                <a href="index.php?n=ingresar" class="btn btn-outline-dark ms-2 me-2">Limpiar</a> |
                <a href="index.php?n=index" class="btn btn-secondary ms-2">Regresar</a>
            </div>
        </form>

    </div>
</main>
<?php require_once("Views/layouts/footer.php")?>