<?php

if(isset($_POST["nombre"]) && isset($_POST["descripcion"]))
{
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];

    $datos = $nombre . "\n" . $descripcion;

    file_put_contents("biografia.txt", $datos);

    header("location:index.php");
}
else 
{
    header("location:admin.php");
}



?>