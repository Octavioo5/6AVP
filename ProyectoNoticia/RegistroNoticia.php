<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <script src="boostrap-5.0.2/css/bootstrap.css"></script>
</head>
<body>
        <form action="GuardarNoticia.php"  method="POST">

                  titulo:
                 <input type="text" name="titulo" id="titulo"  />
                 <br><br>            

                  lugar:  
                  <input type= "text" name="lugar" id="lugar"    />
                  <br><br>
            
                 fecha: 
                 <input type="text" name="fecha" id="fecha" />
                 <br><br>
                       
                 cuerpo: 
                 <input type="text" name="cuerpo"  id="cuerpo"  />
                 <br>

                 imagen: 
                 <input type="file" name="imagen"  id="imagen"  />
                 <br>


                      
                      <input type="submit" name="enviar" id="enviar" value="enviar">
                      <br><br>
                      <form>
      <br>


        </form>
</body>
</html>