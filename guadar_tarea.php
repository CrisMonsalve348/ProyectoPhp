<?php
session_start();
$usuario=$_SESSION["Usuario"];
$elemento=$_POST["tarea_nueva"];

$archivo=json_decode("usuarios/$usuario.json", true);
$archivo[]=$elemento;
$jsonActualizado=json_encode($archivo, JSON_PRETTY_PRINT);
file_put_contents("usuarios/$usuario.json", $jsonActualizado);
header("Location: tareas.php");




?>