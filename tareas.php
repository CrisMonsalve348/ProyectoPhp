<?php include "includes/cabecera.php";?>


<?php

$usuario = $_POST["usuario"];
if(file_exists("usuarios/$usuario.json")){

    startsesion();

    
    
}else{
    header("Location: index.php");
}





echo"<h1>Bienvenido, $usuario "."</h1>";
?>

<h2>tus tareas</h2>
<a href="">Cerrar sesion</a>
<br>
<form action="" method="post">
    <h2>Nueva tarea</h1>
    <input type="text" name="tarea_nueva">
    <br>
    <input type="submit">


</form>


<?php include "includes/pie.php";?>