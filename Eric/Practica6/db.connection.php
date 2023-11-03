<?php
$db_host = "localhost";
$db_nombre = "Users";
$db_usuario = "root";
$db_passwd = "";

$connexio = mysqli_connect($db_host,$db_usuario,$db_passwd,$db_nombre);

if (!$connexio) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>