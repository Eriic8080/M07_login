<?php
//Borramos coockie
setcookie('sel_idioma',"",time() -1,'/');
//Cuando borre coockie redirige a la pagina principal
header('Location: ../views/escollir_idioma.php');
?>