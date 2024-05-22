<?php
    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $lugar = $_POST["lugar"];
    $fecha = $_POST["fecha"];
    $cuerpo = $_POST["cuerpo"];
    $imagenes = $_POST["imagenes"];

    $sql = "INSERT INTO noticias(nombre, lugar, fecha, cuerpo, imagenes) VALUES ('".$nombre."','".$lugar."',".$fecha.",'".$cuerpo."','".$imagenes."')";

    if($conexion->query($sql) === TRUE){
        header("Location: consultarNoticias.php");
    }else{
        echo "<h2>Ocurrió un error</h2> <p>Error: " .$sql. "<br>" .$conexion->error. "</p>";
        echo "<h3><a href='consultarNoticias.php'>Regresar a las noticias</a></h3>";
    }
?>