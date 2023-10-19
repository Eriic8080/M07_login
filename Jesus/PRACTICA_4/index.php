<?php
    //guardamos los datos necesarios para hacer la conexion a la bdd
    $db_host = "localhost";
    $db_nombre = "Users";
    $db_usuario = "root";
    $db_passwd = "";

    $connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);

    echo "hola";
    var_dump($connexio);

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
        
        echo $consulta;
        echo "HOLAAA";

        if(mysqli_query($connexio, $consulta)){
            echo "Datos introducidos!"
        }else{
            echo "Error!"
        }
        echo "conexion";
      
       

        var_dump($users);
        
    }
?>