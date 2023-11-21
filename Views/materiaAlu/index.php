<?php require_once("Views/layouts/headerAlu.php")?>
<main id="contenido" class="fondo-img">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="tabla-mat">
            <div>
                <label class="alert alert-<?php echo $_SESSION["alerta"]?> w-100">
                    <?php echo $_SESSION["Mensaje"]?>                    
                </label>
            </div>
            <div class="text-center">
                <h1 class="text-dark">Materias Disponibles</h1>
            </div>
            <div class="row w-100 mb-3">
                <form action="" method="post" class="d-flex justify-content-center align-items-center">
                    <input type="number" name="id" class="form-control" placeholder="Buscar por ID" />
                    <input type="submit" value="Buscar" class="btn btn-primary ms-2"/>
                    <input type="hidden" name="mat" value="buscar">
                    <a href="index.php?mat=index" name="btnLimpiar" class="btn btn-primary ms-2" value="limpiar">Restablecer</a>
                </form>
            </div>
            <div class="table-responsive-xxl overflow-scroll">
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
            </div>
        </div>

    </div>
</main>
<?php require_once("Views/layouts/footerAlu.php")?>
