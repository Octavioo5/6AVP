<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar noticias
    </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php 
        include 'menu.php';
        include 'conexion.php';

        $sql = "SELECT * FROM noticias";
        $datos = $conexion->query($sql);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if($datos->num_rows > 0){ ?>
                    <div class="table-responsive card m-4 p-2">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titulo</th>
                                    <th>Lugar</th>
                                    <th>Fecha</th>
                                    <th>Cuerpo</th>
                                    <th>Imagen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($registro = $datos->fetch_assoc()){ ?>
                                    <tr>
                                        <td><?php echo $registro["id"]; ?></td>
                                        <td><?php echo $registro["titulo"]; ?></td>
                                        <td><?php echo $registro["lugar"]; ?></td>
                                        <td><?php echo $registro["fecha"]; ?></td>
                                        <td><?php echo $registro["cuerpo"]; ?></td>
                                        <td><?php echo $registro["imagen"]; ?></td>
                                        <td>
                                            <a href="editarNoticia.php?id=<?php echo $registro["id"]?>" class="btn btn-xs btn-primary">Editar</a>
                                            <a href="eliminarNoticia.php?id=<?php echo $registro["id"]?>" class="btn btn-xs btn-danger">Eliminar</a>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                <?php } else{ ?>
                    <h2 class="m-4">No Existe datos en alumnos en la base de datos</h2>
                <?php } ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>  
</body>
</html>