<?php require_once("Views/layouts/headerAlu.php")?>
<main id="contenido" class="fondo-img">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div>
        <div>
                <label class="alert alert-<?php echo $_SESSION["alerta"]?> w-100">
                    <?php echo $_SESSION["Mensaje"]?>                    
                </label>
            </div>
            <div class="text-center mb-2">
                <h1>Notas Finales</h1>
            </div>
            <div class="table-responsive-xxl overflow-scroll mt-3">
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
            </div>
        </div>
    </div>
</main>
<?php require_once("Views/layouts/footerAlu.php")?>
