<?php
require '../config_db.php';

$Email = $_POST['IDusuario'];

$Celular = $_POST['IDusuario'];

$Password = $_POST['password'];

$PasswordEncript = md5(sha1($Password)); //Se encripta con 2 algoritmos md5 y sha1 es mas seguro que md5 solo

$query = "SELECT * FROM usuario WHERE `email` = '$Email' AND  `pass` = '$PasswordEncript' OR `celular` = '$Celular' AND `pass` = '$PasswordEncript'";

$result = mysqli_query($conexion,$query);

if(!$result){

echo "Ocurrio un error en la autenticacion.";


}else{

$rows = mysqli_num_rows($result);

while($rows2 = $result -> fetch_assoc()){

    $ID = $rows2['id'];
    $Idusuario = $rows2['email'];
    $Nombre = $rows2['nombre'];
    $Apellido = $rows2['apellido'];
    $Celular = $rows2['celular'];
    $Email = $rows2['email'];
    $Pass = $rows2['pass'];

}

session_start();

$_SESSION['ID'] = $ID;
$_SESSION['Iduasuario'] = $Idusuario;
$_SESSION['Nombre'] = $Nombre;
$_SESSION['Apellido'] = $Apellido;
$_SESSION['Celular'] = $Celular;
$_SESSION['Email'] = $Email;
$_SESSION['Password'] = $Password;

if($rows > 0){

Header('Location:./wPanel.php');

}else{
    unset($_POST['IDusuario']);
    unset($_POST['password']);
 echo"<script type='text/javascript'> alert('Datos incorrectos, intente de nuevo'); window.location.href='index.php';</script>";
}



}


?>