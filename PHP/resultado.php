<?php
include 'head2.html';
//recibiendo datos desde el index.PHP usando el metodo post
//los datos se declaran con el simobolo $nombre_de_variable = $metodo[id_valor];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

//mostrando los datos recibidos
echo "<p>Mi nombre es: $nombre</p>";
echo "<p>Mi edad es: $edad</p>";
echo "<p>Mi correo es: $correo</p>";
echo "<p>Mi contrasena es: $contrasena</p>";

echo"<a href = 'Index.PHP'> Back </a>";//boton para regresar

?>