<?php
        if(!$_COOKIE['sel_idioma']){
            header('Location:index.php');
        }elseif ($_COOKIE['sel_idioma']=='es'){
            header('Location: ../views/loginEspañol.html');
        }elseif ($_COOKIE['sel_idioma']=='en'){
            header('Location: ../views/loginEnglish.html');
        }elseif ($_COOKIE['sel_idioma']=='ca'){
            header('Location: ../views/loginCatalan.html');
        }

    ?>