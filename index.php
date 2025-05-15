<?php include "includes/cabecera.php";?>


<form action="tareas.php" method="post">
<h1>Iniciar sesion</h1>
<<<<<<< HEAD
<input type="text" name="usuario">
<br>
<input type="submit">
</form>
<h4>Nuevo usuario?</h4>
<a href="registro.php">Resgistrate aqui</a>

=======
>>>>>>> 8af05e3819e38ef09c3b8b7ae82510fde286e5f1
<?php 
    if(empty($_POST["usuario"])){
        echo "<h4>No se escribio un usuraio</h4>";

    }

?>
<input type="text" name="usuario" placeholder="Usuario">
<br>
<input type="submit" value="Entrar">
</form>
<h4>Nuevo usuario?</h4>
<a href="registro.php">Resgistrate aqui</a>


<?php include "includes/pie.php";?>