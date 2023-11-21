<?php require_once("Views/layouts/header.php")?>
<main id="contenido">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div>
        <div>
                <label class="alert alert-<?php echo $_SESSION["alerta"]?> w-100">
                    <?php echo $_SESSION["Mensaje"]?>                    
                </label>
            </div>
            <div class="text-center">
                <h1>Notas Finales</h1>
            </div>
            <div class="row mb-3">
                <p class="col-4 mb-0">
                    <a href="index.php?n=ingresar" class="btn btn-primary">Ingresar Notas</a>
                </p>
                <form action="" method="post" class="col-md-8 d-flex justify-content-center align-items-center">
                    <input type="number" name="id" class="form-control" placeholder="Buscar por ID" />
                    <input type="submit" value="Buscar" class="btn btn-primary ms-2"/>
                    <input type="hidden" name="n" value="buscar">
                    <a href="index.php?n=indexBtn" class="btn btn-primary ms-2" value="limpiar">Restablecer</a>
                </form>
            </div>
            <div class="table-responsive-xxl overflow-scroll">
                <table class="table table-dark table-bordered text-center">
                    <tr>
                        <td>ID Notas</td>
                        <td>ID Alumno</td>
                        <td>ID Docente</td>
                        <td>ID Materia</td>
                        <td>Nombre de Materia</td>
                        <td>Notas</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
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
                                <form action="" method="post">
                                    <td>
                                        <input type="hidden" name="id" value="<?php echo $dato['id_nota']?>">
                                        <input type="submit" value="Editar"
                                        class="btn btn-success">
                                        <input type="hidden" name="n" value="editar">
                                    </td>
                                </form>
                                <form action="" method="post">
                                    <td>
                                        <input type="hidden" name="id" value="<?php echo $dato['id_nota']?>">
                                        <input type="submit" value="Eliminar" class="btn btn-danger">
                                        <input type="hidden" name="n" value="eliminar">
                                    </td>
                                </form>
                            </tr>
                    <?php         }
                        }
                    ?>
                </table>
            </div>
        </div>

    </div>
</main>
<?php require_once("Views/layouts/footer.php")?>
