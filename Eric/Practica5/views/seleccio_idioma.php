<?php
if (
    isset($_COOKIE['sel_idioma'])
) {
    $pagina_anterior = $_SERVER['HTTP_REFERER'];
    header("Location: $pagina_anterior"); 
}

else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccio idioma</title>
</head>
<body>  
    <table width="25%" border="0" align="center">
        <tr>
            <td>Escull Idioma</td>
        </tr>
        <tr>
            <td align="center"><a href="../cookie/crearCookie.php?idioma=es">
            <img src="../img/español.jpeg" width="90" height="60"></a><h1>SPAIN</h1></td>
            <td align="center"><a href="../cookie/crearCookie.php?idioma=en">
            <img src="../img/english.jpg" width="90" height="60"></a><h1>ENGLISH</h1></td>    
            <td align="center"><a href="../cookie/crearCookie.php?idioma=ca">
            <img src="../img/catalanes.jpg" width="90" height="60"></a><h1>CATALAN</h1></td>
        </tr>   
    </table>

</body>
<?php } ?>
</html>