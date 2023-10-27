<?php
$profe = "P";
$alumn = "A";

if($variable['rol']==$alumn){
    echo "<h3>soc un alumne</h3>";
    echo "<h3>nom: ${variable['name']}</h3>";
    echo "<h3>cognom: ${variable['surname']}</h3>";
    echo "<h3>email: ${variable['email']}</h3>";

}
elseif($variable['rol']==$profe){
    echo "Hola ".$variable['name'].", ets professor!!";
    echo "La lista de alumnos de la base de datos és:";

}else{
    include('../views/login.html');
    echo "Login incorrecto";
}

?>