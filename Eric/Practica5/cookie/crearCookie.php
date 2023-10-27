<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>

    <?php
        echo "<h1>Creem cookies</h1>";
        setcookie("sel_idioma",$_GET['idioma'],time()+86400);

        header('Location: ver_cookie.php');
    ?>
    
</body>
</html>