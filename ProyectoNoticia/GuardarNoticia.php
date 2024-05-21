<?php
    include ("Conexion.php");
    $getmysql= new mysqlconex();
    $getconex=$getmysql->conex();


    if (isset($_POST["enviar"])) {
    
        $titulo=$_POST["titulo"];
        $lugar=$_POST["lugar"];
        $fecha=$_POST["fecha"];
        $cuerpo=$_POST["cuerpo"];
        $imagen=$_POST["imagen"];

        $query="INSERT INTO noticias (titulo, lugar, fecha, cuerpo, imagen) VALUES (?,?,?,?,?)";
        $sentencia=mysqli_prepare($getconex,$query);
        mysqli_stmt_bind_param($sentencia,"sssss",$titulo,$lugar,$fecha,$cuerpo, $imagen);
        mysqli_stmt_execute($sentencia);
        $afectado=mysqli_stmt_affected_rows($sentencia);

        if ($afectado==1) {
          echo"<script> alert ('El contacto [$titulo] se agrego correctamente'); location.href='RegistroNoticia.php'; </script>";
        }else {
            echo"<script> alert ('El contacto [$titulo] no se agrego correctamente'); location.href='RegistroNoticia.php'; </script>";
        }


        mysqli_close($sentencia);
        mysqli_close($getconex);
    }
    