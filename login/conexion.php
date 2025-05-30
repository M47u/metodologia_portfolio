<?php
//en mi caso tuve que  poner "root" como contraseña
$conexion = new mysqli("localhost", "root", "", "portfolio");
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

//En caso de que hayas cambiado el puerto del Xampp, hay que aclararlo en los parametros
//Quedaria así: ("localhost", "root", "", "portfolio", port:"3307");
