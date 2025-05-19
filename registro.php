<?php include "includes/cabecera.php";?>

<form action="registro.php" method="post">
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

//condicional que ayuda a que os campos no se dejen vacios 
if(isset($_POST["enviar"])){
if (empty($_POST["Nom_Usuario"]) || empty($_POST["Contraseña"])){
    echo "<h4>Rellene todos los campos</h4>";
}
else {
$usuario=$_POST["Nom_Usuario"];


if(file_exists("usuarios/$usuario.json")){
    echo "este usuario ya existe";
}
else{
   
fopen("usuarios/$usuario.json", "a+");
file_put_contents("usuarios/$usuario.json", json_encode([]));
header("Location: index.php");

}


}

}







?>

<?php include "includes/pie.php"; ?>