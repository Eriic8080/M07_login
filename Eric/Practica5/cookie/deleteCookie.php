<?php
if (isset($_COOKIE['sel_idioma'])) {
    setcookie("sel_idioma", "", time() - 1);
    $pagina_anterior = $_SERVER['HTTP_REFERER'];    //Aqui creo una variable que guarda la URL de la pagina desde donde vengo 
    header("Location: $pagina_anterior");
} else {
    echo '<h1>La cookie no existe.</h1>';
}
?>
