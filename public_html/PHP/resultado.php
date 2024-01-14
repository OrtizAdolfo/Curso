<?php
include 'head2.html';
//recibiendo datos desde el index.PHP usando el metodo post
//los datos se declaran con el simobolo $nombre_de_variable = $metodo[id_valor];
$user= $_POST['username'];
$password = $_POST['password'];

//mostrando los datos recibidos
echo "<p>Mi nombre de usuario es: $user</p>";
echo "<p>Mi contrasena es: $password</p>";

echo"<a href = 'Index.PHP'> Back </a>";//boton para regresar

?>