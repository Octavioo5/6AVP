<?php

    include 'conexion.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM noticias where id =".$id;

    if($conexion->query($sql) === TRUE){
        header("Location: consultarNoticias.php");
        $conexion->close();
        exit;
    }else{
        echo "<h2>Ocurrió un error</h2> <p>Error ".$sql. "<br>" .$conexion->error. "</p>";
        echo "<h3><a href='consultarNoticias.php'>Regresar a noticias</a></h3>";
        $conexion->close();
    }

?>