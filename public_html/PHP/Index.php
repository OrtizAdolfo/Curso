<?php include 'head.html';?>
<form action="resultado.php" method="post">
    <input type="text" id="nombre" name="nombre" placeholder="Nombre: " require>
    <input type="number" id="edad" name="edad" placeholder="Edad: " require>
    <input type="email" id="correo" name="correo" placeholder="Correo: " require>
    <input type="password" id="contrasena" name="contrasena" placeholder="Password: " require>
    <input type="submit" value="Enviar">
</form>