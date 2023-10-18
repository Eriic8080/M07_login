<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form method="POST" action="index.php">
        <h3>ID:<input name="identifier"></input><h3>
        <h3>ROL:<input name="rol"></input><h3>
        <h3>NAME:<input name="namee"></input><h3>
        <h3>SURNAME:<input name="surname"></input><h3>
        <h3>PASSWORD:<input name="passwd"></input><h3>
        <h3>EMAIL:<input type="email" name="email"></input><h3>
        <h3>ACTIVE:<input type="checkbox" name="activo"></input><h3>
        <input type="submit" value="submit" name = "send"/>
    </form>
</body>
</html>