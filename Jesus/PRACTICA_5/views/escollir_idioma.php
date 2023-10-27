
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de idioma</title>
</head>
<body>
<?php
    
    if ($_COOKIE['sel_idioma'] == 'es'){
        header('Location: loginEspañol.html');
    }else if ($_COOKIE['sel_idioma'] == 'en'){
        header('Location: loginEnglish.html');
    }else if ($_COOKIE['sel_idioma'] == 'cat'){
        header('Location: loginCatalan.html');
    }
?>

    <table width="25%" border="0" align="center">
        <tr>
            <td>Escoge Idioma</td>
        </tr>
        <tr>
            <td align="center"><a href="loginEspañol.html?idioma=es">
            <img src="spanishFlag.png" width="90" height="60"></a><h1>ESPAÑA</h1>
            <td align="center"><a href="loginEnglish.html?idioma=en">
            <img src="britishFlag.png" width="90" height="60"></a><h1>ENGLISH</h1>
            <td align="center"><a href="loginCatalan.html?idioma=cat">
            <img src="catalanFlag.png" width="90" height="60"></a><h1>CATALAN</h1>
        </tr>
    </table>
</body>
</html>