<?php require_once("Views/layouts/header.php")?>
<main id="contenido">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div>
            <div class="text-center">
                <h1>Alumnos inscritos</h1>
            </div>
            <div class="row mb-3">
                <p class="col-4 mb-0">
                    <a href="index.php?a=ingresar" class="btn btn-primary">Ingresar Alumno</a>
                </p>
                <form action="" method="post" class="col-8 d-flex justify-content-center align-items-center">
                    <input type="number" name="id" class="form-control" placeholder="Buscar por ID" />
                    <input type="submit" value="Buscar" class="btn btn-primary ms-2"/>
                    <input type="hidden" name="a" value="buscar">
                    <a href="index.php?a=index" class="btn btn-primary ms-2">Restablecer</a>
                </form>
            </div>
            <div class="table-responsive-xxl overflow-scroll">
                <table class="table table-dark table-bordered text-center">
                    <tr>
                        <td>ID</td>
                        <td>Nombres</td>
                        <td>Apellidos</td>
                        <td>Genero</td>
                        <td>Edad</td>
                        <td>Usuario</td>
                        <td>Clave</td>
                        <td>Tipo Usuario</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
                    </tr>
                    <?php
                        if(!empty($datos)){
                            foreach($datos as $dato) {?>
                            <tr class="">
                                <td><?php echo $dato['id_alumno']; ?></td>
                                <td><?php echo $dato['nombres']; ?></td>
                                <td><?php echo $dato['apellidos']; ?></td>
                                <td><?php echo $dato['genero']; ?></td>
                                <td><?php echo $dato['edad']; ?></td>
                                <td><?php echo $dato['nUsuario']; ?></td>
                                <td><?php echo $dato['clave']; ?></td>
                                <td><?php echo $dato['tipoUsuario']; ?></td>
                                <form action="" method="post">
                                    <td>
                                        <input type="hidden" name="id" value="<?php echo $dato['id_alumno']?>">
                                        <input type="submit" value="Editar"
                                        class="btn btn-success">
                                        <input type="hidden" name="a" value="editar">
                                    </td>
                                </form>
                                <form action="" method="post">
                                    <td>
                                        <input type="hidden" name="id" value="<?php echo $dato['id_alumno']?>">
                                        <input type="submit" value="Eliminar" class="btn btn-danger">
                                        <input type="hidden" name="a" value="eliminar">
                                    </td>
                                </form>
                            </tr>           
                    <?php   }
                        }
                    ?>
                </table>
            </div>
        </div>

    </div>
</main>
<?php require_once("Views/layouts/footer.php")?>