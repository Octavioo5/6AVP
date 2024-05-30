<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
      <?php
        include 'menu.php';
        /*  
         <form action="GuardarNoticia.php"  method="POST">

                  titulo:
                 <input type="text" name="nombre" id="nombre"  />
                 <br><br>            

                  lugar:  
                  <input type= "text" name="lugar" id="lugar"    />
                  <br><br>
            
                 fecha: 
                 <input type="date" name="fecha" id="fecha" />
                 <br><br>
                       
                 cuerpo: 
                 <input type="text" name="cuerpo"  id="cuerpo"  />
                 <br>

                 imagen: 
                 <input type="file" name="imagenes"  id="imagenes"  />
                 <br>
                      
                      <input type="submit" name="enviar" id="enviar" value="enviar">
                      <br><br>
                      <form>
      <br>

        </form>
        */ 
      ?>
       
        <div class="container">
        <div class="row">
            <h2>Registrar Noticia</h2>
            <div class="col-12 card m-4 p-4">
                <form action="GuardarNoticia.php" method="POST">
                    <div class="form-group">
                        <label for="">Titulo:</label>
                        <input type="text" name="titulo" class="form-control" placeholder=" Registra un titulo" required>
                    </div>
                    <div class="form-group">
                        <label for="">Lugar:</label>
                        <input type="text" name="lugar" class="form-control" placeholder="Registra el lugar de la noticia" required>
                    </div>
                    <div class="form-group">
                        <label for="">Fecha:</label>
                        <input type="date" name="fecha" class="form-control" placeholder="Registra la fecha de la noticia" required>
                    </div>
                    <div class="form-group">
                        <label for="">Cuerpo:</label>
                        <input type="textarea" name="cuerpo" class="form-control" placeholder="Registra el cuerpo de la noticia" required>
                    </div>
                    <div class="form-group">
                        <label for="">imagen:</label>
                        <input type="file" name="imagen" class="form-control" placeholder="Anexa imagen de la noticia" required>
                    </div>
                    <div>
                        <input type="submit" value="registrar" class="btn btn-primary">
                        <a href="consultarNoticias.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
    <script src="js/bootstrap.bundle.js"></script>

     
</body>
</html>

 