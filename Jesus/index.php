<?php
    //guardamos los datos necesarios para hacer la conexion a la bdd
    $db_host = "localhost";
    $db_nombre = "users";
    $db_usuario = "root";
    $db_passwd = "";

    $id = $_POST['id'];
    $rol = $_POST['rol'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $active = $_POST['active'];
    //comentario hecho por roger para subir la rama



    //Aquí hacemos la conexion a la DB

    $connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);

    $consulta ="INSERT INTO USERS (id, rol, name, surname, password, email, active) VALUES(
        '$id',
        '$rol',
        '$name',
        '$surname',
        '$password',
        '$email',
        '$active')";

    $users = mysqli_query($connexio, $consulta);

    if ($users) {
        header('location: Ejercicio1Jesus.php');
        exit();
    } else{

    }




?>