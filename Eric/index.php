<?php
$db_host = "localhost";
$db_nombre = "Users";
$db_usuario = "root";
$db_passwd = "";

$connexio = mysqli_connect($db_host,$db_usuario,$db_passwd,$db_nombre);

if (!$connexio) {
    die("Error de conexión: " . mysqli_connect_error());
}

if(isset($_POST['send'])){
    $identifier= $_POST['identifier'];
    $rol= $_POST['rol'];
    $nombre= $_POST['namee'];
    $subnombre= $_POST['surname'];
    $email= $_POST['email'];
    $passwd= $_POST['passwd'];
    $activo= $_POST['activo'];

    $consulta = "INSERT into `user`(`id`, `rol`, `name`, `surname`, `password`, `email`, `active`) Values (
        '$identifier',
        '$rol',
        '$nombre',
        '$subnombre',
        '$email',
        '$passwd',
        '$activo')";
    
    if (mysqli_query($connexio, $consulta)) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar datos: " . mysqli_error($connexio);
    }
}
mysqli_close($connexio);
?>
