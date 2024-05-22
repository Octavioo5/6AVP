<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
      <?php
        include 'menu.php';
      ?>
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
        
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>