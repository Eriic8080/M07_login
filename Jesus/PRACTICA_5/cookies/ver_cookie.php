<?php
if (!$_COOKIE['sel_idioma']){
    header('Location: ../views/escollir_idioma.php');
}else if ($_COOKIE['sel_idioma'] == 'es'){
    header('Location: ../views/loginEspañol.html');
    
}else if ($_COOKIE['sel_idioma'] == 'en'){
    header("Location: ../views/loginEnglish.html");
}else if ($_COOKIE['sel_idioma'] == 'cat'){
    header("Location: ../views/loginCatalan.html");
}
?>