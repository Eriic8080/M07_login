<?php
if ($_COOKIE['sel_idioma']){
    header('Location: index.php');
}else if ($_COOKIE['sel_idioma'] == 'es'){
    header('Location: spanish.html');
}else if($_COOKIE['sel_idioma'] == 'en'){
    header('Location: english.html');
}

?>