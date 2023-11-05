<?php
include_once('../db.connection.php');       
    session_start();
    if(isset($_POST['enviar'])){
        $email = $_POST["email"];
        $passwd = $_POST["passwd"];

        $consulta = "SELECT * FROM user WHERE email = '$email' AND password = '$passwd'";
        $resultado = mysqli_query($connexio, $consulta);
        $variable = $resultado->fetch_array(MYSQLI_ASSOC);


        include('../views/usuari.php');
    }

?>
