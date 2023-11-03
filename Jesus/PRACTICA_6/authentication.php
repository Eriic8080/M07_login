
  <?php
    session_start();
    echo "hola";
    $db_host = "localhost";
    $db_usuario = "root";
    $db_passwd = "";
    $db_nombre = "Users";
    echo $db_nombre;
    
    //Con $connexio lo que hacemos es conectar a nuestra BDD gracias a mysli_connect que a su vez recoge los datos
    //De las lineas de arriba.
    $connexio = new mysqli($db_host, $db_usuario, $db_passwd, $db_nombre);

    // Verificar la conexión
    if ($connexio->connect_error) {
        die("Falló la conexión: " . $connexio->connect_error);
    }

    // Obtener datos del formulario
    if(isset($_POST['rol']) && isset($_POST['name'])){
        $rol = $_POST['rol'];
        $name = $_POST['name'];
    }
    
    // Consulta para verificar las credenciales
    $consulta = "SELECT * FROM users WHERE rol ='$rol' AND name = '$name'";
    echo $consulta;
    $resultado = $connexio->query($consulta);
    var_dump($resultado);
    if ($resultado->num_rows == 1) {
        // Las credenciales son válidas
        echo "Inicio de sesión exitoso";
        // Aquí puedes redirigir al usuario a la página de inicio, por ejemplo.
    } 
    
    if(isset($_POST['Enviar']) && isset($_POST['rol']) && isset($_POST['name'])){
        $_SESSION['rol_id'] = $_POST['rol'];
        $_SESSION['name_id'] = $_POST['name'];
        //header('Location: views/MostrarDades.php');
    }
    
    //Cierra la conexión a la base de datos
        
?>



