<?php
include_once('../db.connection.php');

if(isset($_POST['send'])){
    $identifier= $_POST['identifier'];
    $rol= $_POST['rol'];
    $nombre= $_POST['namee'];
    $subnombre= $_POST['surname'];
    $email= $_POST['email'];
    $passwd= $_POST['passwd'];
    $activo= $_POST['activo'];

    $consulta = "INSERT into `user`(`id`, `rol`, `name`, `surname`, `email`,`password`, `active`) Values (
        '$identifier',
        '$rol',
        '$nombre',
        '$subnombre',
        '$email',
        '$passwd',
        '$activo')";
    
    if (mysqli_query($connexio, $consulta)) {
        echo "La inserció és correcta. <a href='../views/login.html'>Iniciar Session</a>";
        
    } else {
        echo "Error al insertar datos: " . mysqli_error($connexio);
    }
}
?>