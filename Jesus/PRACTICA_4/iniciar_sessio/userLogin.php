<?php
include ('../db_connection.php');


    // Obtener datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta para verificar las credenciales
    $consulta = "SELECT * FROM users WHERE email ='$email' AND password = '$password'";
    
    $resultado = $connexio->query($consulta);

    if ($resultado->num_rows == 1) {
        // Las credenciales son válidas
        echo "Inicio de sesión exitoso";
        // Aquí puedes redirigir al usuario a la página de inicio, por ejemplo.
    } else {
        // Las credenciales son inválidas
        echo "Inicio de sesión fallido. Verifica tu correo y contraseña.";
    }

    // Cierra la conexión a la base de datos
    
?>
