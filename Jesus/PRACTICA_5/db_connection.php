<?php
    $db_host = "localhost";
    $db_usuario = "root";
    $db_passwd = "";
    $db_nombre = "Users";
    
    //Con $connexio lo que hacemos es conectar a nuestra BDD gracias a mysli_connect que a su vez recoge los datos
    //De las lineas de arriba.
    $connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);
    
    //Aquí comprobaremos en el primer if si no hace la conexión correctamente nos devolverá el mensaje de la linea 14.
    if (!$connexio) {
        die("Conexión Fallida: " . mysqli_connect_error());
    }
?>