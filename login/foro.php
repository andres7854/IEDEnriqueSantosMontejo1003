<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1003</title>
    <link rel="stylesheet" href="css/PaginaMomentaneaStyle.css">

</head>

<body>

<div class="body">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">
    
    <?php

    $text 

    ?>

    <div class="formulario">
        
        <form action="publicar.php" method="POST" enctype="multipart/form-data">
        
            <table class="formTable">
                <tbody>
                    <tr>
                        <td><h2>SUBIR PUBLICACION</h2></td>
                        <td><input method="POST" name="UsuarioActivo" type="text" id="UserActive" value="<?php session_start(); echo $_SESSION['user'] ?>"></td>
                    </tr>
                    <tr>
                        <td><input name="publicationImage" type="file" id="PublicateButton" accept="image/*">
                    <label for="PublicateButton">      
                    SUBIR IMAGEN
                    </label></td>
                    </tr>
                    <tr>
                        <td><textarea method="POST" name="TextUpload" id="" cols="30" rows="10" placeholder="ponga aqui su texto"></textarea></td>
                    </tr>
                    <tr>
                        <td><input id="uploadButton" type="submit" value="subir">
                        <label for="uploadButton">
                        SUBIR
                        </label></td>
                    </tr>
                </tbody>
            </table>
            
        
            
            
            
            
            
            <br>

            
            
            <br>

            
        
        </form>

    

    </div>
    
    <div class="Publications">    
    <table class="PublicationsTable">
        <?php
            include("db.php");
            $sql="SELECT * from publicaciones";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){ 
        ?>
        <thead>

        </thead>
        <tbody>
        <tr>
            <th><?php echo $mostrar['usuario_publicacion'] ?> a publicado</th>
        </tr>
        <tr>
            
            <td><img id="PublicatedImage" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen_publicacion']); ?>"></td> 
        </tr>
        <tr>
            <td><textarea name="" id="" cols="50" rows="20" readonly ><?php echo $mostrar['texto_publicacion'] ?></textarea></td>
        </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    </div>
    </div>
</body>

</html>