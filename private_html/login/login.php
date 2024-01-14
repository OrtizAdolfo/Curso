<?php
session_start();
include"conection.php";
$user = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT nombre FROM users WHERE BINARY username = '$user' AND BINARY password = '%password'";
$result = mysqli_query($connectionn, $query);

if($result && mysqli_num_rows($result) > 0){
$row = mysqli_fetch_assoc($result);
$_SESSION['nombre'] = $row['nombre'];
header("location: ../../public_html/PHP/Index.php");
}
 else {
    echo"<script>alert('usuario o contrasena incorrectas. Por favor intentar de nuevo'); window.location = '../../public_html/login/index.html';</script>";
 }
 ?>
