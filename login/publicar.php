<?php


        include('db.php');

        $imagePublication = addslashes(file_get_contents($_FILES['publicationImage']['tmp_name']));

        $contentPublication =$_POST['TextUpload'];

        $userPublicating =$_POST['UsuarioActivo'];
        
        if (is_null($userPublicating)) {

                header('location:userNotLoged.html');

        }else{
                
                $query = "INSERT INTO publicaciones(imagen_publicacion, texto_publicacion, usuario_publicacion) VALUES('$imagePublication', '$contentPublication', '$userPublicating')";
       
                $resultado = $conexion->query($query);
        
                header("location:foro.php");                

        }
       

        

    
    
    



?>