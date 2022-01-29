<?php

    include("images.php");

    $Imagen = addslashes(file_get_contents($_FILES['profileImage']['tmp_name']));

    $query = "INSERT INTO imagenes_publicadas(imagen) VALUES('$Imagen')";
    
    $resultado = $conexion->query($query);

?>