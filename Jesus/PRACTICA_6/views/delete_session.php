<?php
session_start();

// borra todas las variables session
session_unset();
// Destruir la sesión
session_destroy();

// Redirigir a la página inici.html
header('Location: inici.html');
?>
