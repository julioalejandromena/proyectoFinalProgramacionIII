<?php
$password = trim( isset($_POST["passwordBlog"]) ?  $_POST["passwordBlog"] : "" );
$passwordAlmacenado = trim( file_get_contents("password.txt") );

if($password == $passwordAlmacenado)
{
    $titulo = $_POST["blog"];
    $descripcionBlog = $_POST["descripcionBlog"];
    $fecha = date("l jS \of F Y h:i:s A");
    $datos = $titulo . "||" . $descripcionBlog . "||" . $fecha;

    file_put_contents("blog.txt", $datos . "\n", FILE_APPEND);
}
else

header("location:index.php");
?>