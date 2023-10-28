<?php
// Inicia la sesión para poder configurar y acceder a las cookies
session_start();

// Verifica si se proporciona un idioma a través de la consulta GET
if (isset($_GET['idioma'])) {
    // Configura la cookie "sel_idioma" con el valor proporcionado y una duración de 1 día
    setcookie("sel_idioma", $_GET['idioma'], time() + 86400, '/');
    echo "<h1>Cookie creada</h1>";
} else {
    echo "<h1>No se proporcionó un idioma</h1>";
}

// Redirige a la página "ver_cookie.php" después de configurar la cookie
header('Location: ver_cookie.php');
?>
