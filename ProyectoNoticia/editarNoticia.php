<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar noticia</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php 
        include 'menu.php'; 
        include 'conexion.php';
        $id = $_GET["id"];
        $sql = "SELECT * FROM noticias WHERE id=".$id;

        $datos = $conexion->query($sql);
        $noticia = $datos->fetch_assoc();
    ?> 

    <div class="container">
        <div class="row">
            <h2>Registrar noticia</h2>
            <div class="col-12 card m-4 p-4">
                <form action="actualizarRegistro.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $noticia["id"]; ?>">
                    <div class="form-group">
                        <label for="">Titulo:</label>
                        <input type="text" name="titulo" value="<?php echo $noticia["titulo"]; ?>" class="form-control" placeholder="Teclea el titulo" required>
                    </div>
                    <div class="form-group">
                        <label for="">Lugar:</label>
                        <input type="text" name="nc" value="<?php echo $noticia["lugar"]; ?>" class="form-control" placeholder="Teclea el lugar" required>
                    </div>
                    <div class="form-group">
                        <label for="">fecha:</label>
                        <input type="date" name="fecha" value="<?php echo $noticia["fecha"]; ?>" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <label for="">Cuerpo:</label>
                        <input type="text" name="cuerpo" value="<?php echo $noticia["cuerpo"]; ?>" class="form-control" placeholder="Escribe el cuerpo" required>
                    </div>
                    <div class="form-group">
                        <label for="">Imagen:</label>
                        <input type="file" name="imagen" value="<?php echo $noticia["imagen"]; ?>" class="form-control"  required>
                    </div><br>
                    <div>
                        <input type="submit" value="Actualizar" class="btn btn-primary">
                        <a href="consultarAlumnos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>  
</body>
</html>