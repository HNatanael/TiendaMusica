<?php
//$conexion = mysql_connect("localhost","root","","TiendaDiscos");
$conexion= new mysqli("localhost:3306","root","","TiendaMusica");
if($conexion->connect_error)
{
	die("Connection failed: ".$conexion->connect_error);
}
/*if(!$conexion) {
	echo "no conectado";
}
else {
	echo "Conectado a la base de datos";
}*/
?>