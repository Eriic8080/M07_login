<?php
$db_host = "localhost";
$db_nombre = "Users";
$db_usuario = "root";
$db_passwd = "";


$identifier= $_POST['identifier'];
$rol= $_POST['rol'];
$nombre= $_POST['namee'];
$subnombre= $_POST['surname'];
$email= $_POST['email'];
$password= $_POST['passwd'];
$activo= $_POST['activo'];



$connexio = mysqli_connect($db_host,$db_usuario,$db_passwd,$db_nombre);

$consulta = "INSERT into Users(identifier,rol,namee,surname,email,passwd,activo";

$Users = mysqli_query($connexio,$consulta);

?>
