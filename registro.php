<?php include "includes/cabecera.php";?>

<form action="" method="post">
    <h1>registrese
    </h1>
    <br>
<input type="text" name="Nom_Usuario" placeholder="Usuario">
<br>
<input type="password" name="Contraseña" placeholder="Contraseña">
<br>
<input type="submit" value="registrarse" name="enviar">

</form>

<?php 
if(isset($_POST["enviar"])){
if (empty($_POST["Nom_Usuario"])){
    echo "<h4>el campo esta vacio</h4>";
}
}

?>

<?php include "includes/pie.php"; ?>