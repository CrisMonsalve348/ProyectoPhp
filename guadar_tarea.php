<?php
session_start();

$usuario = $_SESSION["Usuario"];
$elemento = $_POST["tarea_nueva"];

$rutaArchivo = "usuarios/$usuario.json";

$contenido = file_get_contents($rutaArchivo);


$archivo = json_decode($contenido, true);


if (!is_array($archivo)) {
    $archivo = [];
}


$archivo[] = $elemento;


$jsonActualizado = json_encode($archivo, JSON_PRETTY_PRINT);

file_put_contents($rutaArchivo, $jsonActualizado);


header("Location: tareas.php");
exit;

  



?>