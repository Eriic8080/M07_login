<?php
include('db_connection.php');
session_start();
    
    if(isset($_POST['Enviar'])){
        $rol = $_POST['rol_id'];
        $name = $_POST['name_id'];

        // Consulta para verificar las credenciales
        $consulta = "SELECT * FROM users WHERE rol ='$rol' AND name = '$name'";
        $resultado = $connexio->query($consulta);
        $var = $resultado->fetch_array(MYSQLI_ASSOC);
        

        header('Location:MostrarDades.php');
    }
?>



