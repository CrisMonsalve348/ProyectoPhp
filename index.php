<?php include "includes/cabecera.php";?>


<form action="" method="post">
<h1>Iniciar sesion</h1>
<input type="text" name="usuario">
<br>
<input type="submit">
</form>
<h4>Nuevo usuario?</h4>
<a href="registro.php">Resgistrate aqui</a>

<?php 
    if(empty($_POST["usuario"])){
        echo "<h2>No se escribio un usuraio</h2>";

    }

?>
<?php include "includes/pie.php";?>