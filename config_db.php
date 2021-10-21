<?php

$conexion = new mysqli("localhost","root","","banbu"); //Cambie la variable mysqli_connect por el objeto tipo mysqli (es más seguro y funciona exactamente igual con la palabra clave new instanciamos el objeto)

if(!$conexion){
    echo"Ocurrio un error no se pudo conectar a la base de datos";
}
