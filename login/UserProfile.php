<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blablabla</title>

</head>

<body>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="UserProfileStyle.css">

    <img class="ProfilePhoto" src="..." alt="">



    <div class="UserDescription">
        <div class="card" style="width: 18rem;">
        <?php
        
        include("images.php");
        
        $query = "SELECT * FROM imagenes_publicadas";
        $resultado = $conexion->query($query);
        while($row = $resultado->fetch_assoc()){

        ?>
        <tr>
            <td><img class="profileImage" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
        </tr>
        <?php
        }
        ?>
        <form action="UploadProfilePhoto.php" method="POST" enctype="multipart/form-data">
                <input name="profileImage" type="file" id="UploadProfilePhoto" accept="image/*">
                <label for="UploadProfilePhoto">
                    <span class="material-icons-outlined">
                        add_photo_alternate
                    </span>
                        Seleccionar Imagen De Perfil
                </label>
                <input type="submit" value="subir">

        </form>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>


</body>

</html>