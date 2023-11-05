<?php
$profe = "P";
$alumn = "A";
session_start();

if($variable['rol']==$alumn){

    $_SESSION['name'] = $variable['name'];
    $_SESSION['cognom'] = $variable['surname'];
    $_SESSION['correo'] = $variable['email'];

    
    echo "Benvingut/da alumne: ". $_SESSION['name'];  
    echo "<br>cognom: ". $_SESSION['cognom'];
    echo "<br>email: ". $_SESSION['correo'];

    echo "<br><a href='../views/deleteSession.php'> Borrar Session</a>";

}
elseif($variable['rol']==$profe){
    $_SESSION['name'] = $variable['name'];

    echo "Benvingut/da profesor/a ".$_SESSION['name']."<br>";
    echo "La lista de alumnos de la base de datos és:<br>";
    $como = 'select * from user';
    $otra = mysqli_query($connexio, $como);
    while($columna = mysqli_fetch_array($otra,MYSQLI_ASSOC)){
        echo '<br> nom: '. $columna['name'].'  '.'cognom: '. $columna['surname'];
    }
    echo "<br><a href='../views/deleteSession.php'> Borrar Session</a>";


}else{
    include('../views/login.html');
    echo "Login incorrecto";
}

?>