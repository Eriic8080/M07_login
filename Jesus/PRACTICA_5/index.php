<?php
    //guardamos los datos necesarios para hacer la conexion a la bdd
    $db_host = "localhost";
    $db_nombre = "Users";
    $db_usuario = "root";
    $db_passwd = "";

    $connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);
    
    if (!$connexio) {
        die("Conexión Fallida: " . mysqli_connect_error());
    } else {
        echo "Conexión exitosa";
    }
   

    if(isset($_POST['send'])){
        $id = $_POST['id'];
        $rol = $_POST['rol'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $active = $_POST['active'];

        $consulta ="INSERT INTO `users`(`id`, `rol`, `name`, `surname`, `password`, `email`, `active`) VALUES (
            '$id',
            '$rol',
            '$name',
            '$surname',
            '$password',
            '$email',
            '$active'
        )";

        var_dump($consulta);
        echo "HOLA1";
        if(mysqli_query($connexio, $consulta)){
            echo "Datos introducidos!";
        }else{
            echo "Error: " . mysqli_error($connexio);
        }
        echo "HOLA2";
    }
    mysqli_close($connexio);
?>