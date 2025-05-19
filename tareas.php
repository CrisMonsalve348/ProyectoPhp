<?php include "includes/cabecera.php";?>


<?php
session_start();

$_SESSION["Usuario"] = $_POST["usuario"];
$usuario= $_SESSION["Usuario"];
if(file_exists("usuarios/$usuario.json")){

    echo "sesion iniciada";
    echo $_SESSION["Usuario"];

    
    
}else{
    session_destroy();
    header("Location: index.php");
}





echo"<h1>Bienvenido, $usuario "."</h1>";
?>

<h2>tus tareas</h2>
<a href="">Cerrar sesion</a>
<br>
<ul>
    <?php

    $lista = json_decode("usuarios/$usuario.json", true);
    foreach($lista as $elemento){
        echo "<li>$lista</li>";

    }

    
    ?>
</ul>

<form action="guadar_tarea.php" method="post">
    <h2>Nueva tarea</h1>
    <input type="text" name="tarea_nueva">
    <br>
    <input type="submit" name="enviar_tarea">


</form>




<?php include "includes/pie.php";?>