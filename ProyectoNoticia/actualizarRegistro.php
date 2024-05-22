<?php

    include 'conexion.php';
    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $lugar = $_POST["lugar"];
    $fecha = $_POST["fecha"];
    $cuerpo = $_POST["cuerpo"];
    $imagen = $_POST["imagen"];

    $sql = "UPDATE noticias SET titulo='".$titulo."', lugar='".$lugar."', fecha=".$fecha.", cuerpo='".$cuerpo."', imagen='".$imagen."' WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        header("Location: consultarNoticias.php");
        $conexion->close();
        exit;
    }else{
        echo "<h2>Ocurrió un error</h2> <p>Error ".$sql. "<br>" .$conexion->error. "</p>";
        echo "<h3><a href='consultarNoticias.php'>Regresar a alumnos</a></h3>";
        $conexion->close();
    }


?>