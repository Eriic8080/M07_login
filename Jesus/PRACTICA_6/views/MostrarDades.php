<?php
    session_start();
    include('authentication.php');
    include('db_connection.php');
    echo "hola";
    $profe = 'p';
    $alumno = 'a';
    
    if($var['rol_id']==$alumno){
        echo "holAAA";
        $_SESSION['name_id'] = $var['name_id'];
        $_SESSION['surname'] = $var['surname'];
        $_SESSION['correo'] = $var['email'];

        echo "Bienvenido alumno: ". $_SESSION['name'];
        echo "<br>Apellido: ". $_SESSION['surname'];
        echo "<br>email: ". $_SESSION['correo'];

    }else if($var['rol_id']==$profe){
        $_SESSION['name'] = $var['name'];

        echo "Bienvenido ".$_SESSION['name'].", eres profesor!<br>";
        echo "Los datos de tu bdd son los siguientes:<br>";
        $resultado = 'select * from users';
        $connect = mysqli_query($connexio, $resultado);

        while($consulta = mysqli_fetch_array($connect, MYSQLI_ASSOC)){
            echo '<br> nom: ' . $consulta['name'] . ' cognom: ' . $consulta['surname'];
        }

        
    }
    
    
?>
