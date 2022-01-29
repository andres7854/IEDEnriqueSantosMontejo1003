<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$loged= False;

session_start();
$_SESSION['usuario']=$usuario;
$_SESSION['loged']=$loged;

include('db.php');

$consulta="SELECT*FROM usuarios where usuario='$usuario'and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);


session_start();

$_SESSION['user']="$usuario";
$_SESSION['logied']=$loged;

if($filas['id_cargo']==1)
{

    header("location:AdminHome.html");

}else
if($filas['id_cargo']==2) 
{

    header("location:foro.php");
   
}
else{

    header("location:foro.html");
    
}

mysqli_free_result($resultado);

?>

</body>
</html>

