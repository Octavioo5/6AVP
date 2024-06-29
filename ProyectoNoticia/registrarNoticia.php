<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
      <?php include 'menu.php';?>
      <div class="container">
        <div class="row">
            <h2>Registrar Noticia</h2>
            <div class="col-12 card m-4 p-4">
                <form action="GuardarNoticia.php"  method="POST">  
                    <div class="form-group">
                        <label for="">Titulo:</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Teclea el titulo" required>
                    </div>
                    <div class="form-group">
                        <label for="">Lugar:</label>
                        <input type="text" name="lugar" class="form-control" placeholder="Teclea el lugar" required>
                    </div>
                    <div class="form-group">
                        <label for="">Fecha:</label>
                        <input type="date" name="fecha" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <label for="">Cuerpo:</label>
                        <input type="number" name="cuerpo" class="form-control" placeholder="Teclea el cuerpo" required>
                    </div>
                    <div class="form-group">
                        <label for="">Imagen:</label>
                        <input type="file" name="imagenes" class="form-control" >
                    </div>
                    
                    <div>
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a href="consultarAlumnos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
        
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>