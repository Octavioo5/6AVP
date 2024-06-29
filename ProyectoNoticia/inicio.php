<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de noticias</title>
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

    <div class="container card mt-4 p-4">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Bienvenido a DPMx</h2>
                <!-- <img src="imagenes/logocetis.png" alt=""> -->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if($datos->num_rows > 0){ ?>
                    <div class="table-responsive card m-4 p-2">
                        
                                <?php while($registro = $datos->fetch_assoc()){ ?>
                                   
                                    <?php echo "<p>"; ?>
                                    <?php echo $registro["nombre"]; ?>
                                    <?php echo $registro["lugar"]; ?>
                                    <?php echo $registro["fecha"]; ?>
                                    <?php echo $registro["cuerpo"]; ?>
                                    <?php echo $registro["imagenes"]; ?>
                                    <?php echo "</p>"; ?>
                                        
                                <?php }?>
                           
                    </div>
                <?php } else{ ?>
                    <h2 class="m-4">No Existe datos en noticias en la base de datos</h2>
                <?php } ?>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <hr>
        DPMx &copy; 2023
    </footer>

    <script src="js/bootstrap.bundle.js"></script>

</body>
</html>