<?php
//Se encarga de establecer conexión con la base de datos y gestionarla.
//Para ello usamos MySQLi, que ayuda a manejar las bases de datos con PHP.
//Parámetros: ubicación servidor, nombre usuario, contraseña y base de datos.
$mysqli = new mysqli("localhost", "root", "", "clubdeportivo");

//Si da error la conexión. Muestra numero de error y descripcion del error.
if($mysqli->connect_errno){
    echo "Fallo al conectar a MySQL: (", $mysqli->connect_errno, ") ", $mysqli->connect_error;
}
?>

