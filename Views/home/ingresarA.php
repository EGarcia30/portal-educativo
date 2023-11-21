<?php require_once("Views/layouts/header.php")?>
<main id="contenido">
    <div class="d-flex justify-content-center align-items-center mt-5">
        <form action="" method="post" class="col-8 rounded shadow p-3 p-sm-4">
            <div class="form-horizontal">
                <h2 class="text-center">Ingresar Alumno</h2>
                <hr>
                <div class="mt-5">
                    <label for="nombres">Ingresar Nombres:</label>
                    <input type="text" name="nombres" class="form-control" placeholder="Ejemplo Salvador Ernesto..">
                </div>
                <div class="mt-5">
                    <label for="apellidos">Ingresar Apellidos:</label>
                    <input type="text" name="apellidos" class="form-control" placeholder="Ejemplo Sicilia Sanchez..">
                </div>
                <div class="mt-5">
                    <label for="genero">Ingresar Genero:</label>
                    <input type="text" name="genero" class="form-control" placeholder="Ejemplo Femenino/Masculino">
                </div>
                <div class="mt-5">
                    <label for="edad">Ingresar Edad:</label>
                    <input type="number" step="1" name="edad" class="form-control" placeholder="Ejemplo 24..">
                </div>
                <div class="mt-5">
                    <label for="nUsuario">Ingresar Usuario:</label>
                    <input type="text" name="nUsuario" class="form-control" placeholder="Ejemplo Salvi123..">
                </div>
                <div class="mt-5">
                    <label for="clave">Ingresar Contraseña:</label>
                    <input type="text" name="clave" class="form-control" placeholder="Ejemplo Alu1..">
                </div>
                <div class="mt-5 mb-2">
                    <label for="tUsuario">Ingresar Tipo Usuario:</label>
                    <input type="text" name="tUsuario" value="alumno" class="form-control">
                </div>
                <hr class="text-black w-100">

                <div>
                    <label class="alert alert-<?php echo $_SESSION["alerta"]?> w-100">
                    <?php echo $_SESSION["Mensaje"]?>                    
                    </label>
                </div>
                <input type="submit" value="Ingresar" class="btn btn-success me-2"> |
                <input type="hidden" name="a" value="ingresarAlumno">
                <a href="index.php?a=ingresar" class="btn btn-outline-dark ms-2 me-2">Limpiar</a> |
                <a href="index.php?a=index" class="btn btn-secondary ms-2">Regresar</a>
            </div>
        </form>

    </div>
</main>
<?php require_once("Views/layouts/footer.php")?>