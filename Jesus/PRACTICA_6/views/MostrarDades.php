<?php
session_start();
include ('../authentication.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>
        <?php
            echo "Tu nombre es " . $_SESSION["name_id"];

            if(isset($_SESSION["rol_id"]) && isset($_SESSION["name_id"])){
                echo "<br> Has iniciado sesión correctamente.";
            } else {
                echo "<br> No has iniciado sesión.";
            }
            
        ?>
    </h1>
    <a href="Login.html">Borrar Session</a>
    
</body>
</html>
