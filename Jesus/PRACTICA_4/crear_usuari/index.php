<?php
    include ('../db_connection.php');
    //Aquí recorreremos cada uno de los sets comenzando por el boton de enviar, ya que al darle click lo que hacemos es ingresar todos los valores siguientes.
    if(isset($_POST['send'])){
        $id = $_POST['id'];
        $rol = $_POST['rol'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $active = $_POST['active'];

        if($active == "on"){
            $active = True;
        }else if($active == "off"){
            $active = False;
        }
        
        
        //Aquí creamos la query que se introducirá en nuestra tabla llamada users, y los valores los recoge del formulario gracias al tag name.
        $consulta = "INSERT INTO `users`(`id`, `rol`, `name`, `surname`, `password`, `email`, `active`) VALUES (
            '$id',
            '$rol',
            '$name',
            '$surname',
            '$password',
            '$email',
            '$active'
        )";
        

        if (mysqli_query($connexio, $consulta)) {
            echo "Datos introducidos!";
        } else {
            echo "Error: " . mysqli_error($connexio);
        }
        
    }
?>