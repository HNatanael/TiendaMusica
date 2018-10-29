<?php
	session_start();
	error_reporting(0);

	$se = $_SESSION['Usuario'];
		if($se == null || $se = ''){
			$mensaje = "No tiene autorizaciòn";
            echo "<script>";
            echo "alert('$mensaje');";  
            echo "window.location = '../index.php';";
            echo "</script>"; 
			die();
		}
?>

<!DOCTYPE html>
<html lanf="es">
<head>
	<meta charset="UTF-8">
	<title>HN Music Shop</title>
	<link rel="stylesheet" href="../css/estilosprincipal.css">
	<script src="../js/jquery.js"></script>
	<script src="../js/myjava.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</head>
<body>
	<h1>HN Music Shop</h1>
	<div class="form-register">
		<h2 class="form-titulo">OPCIONES</h2>
		<div class="contenedor-inputs">
			<h2 class="enviar2">ALBUMS</h2>
			<form action="registro.php">
				<input type="submit" class="enviar" value="Agregar">
			</form>
			<form action="modificaralbum.php">
				<input type="submit" class="enviar" value="Modificar">
			</form>
			<form action="eliminaralbum.php">
				<input type="submit" class="enviar" value="Eliminar">
			</form>
			<form action="../php/desplegaralbum.php">
				<input type="submit" class="enviar" value="Desplegar">
			</form>
			<h2 class="enviar2">ARTISTAS</h2>
			<form action="registroartista.php">
				<input type="submit" class="enviar" value="Agregar">
			</form>
			<form action="modificarartista.php">
				<input type="submit" class="enviar" value="Modificar">
			</form>
			<form action="eliminarartista.php">
				<input type="submit" class="enviar" value="Eliminar">
			</form>
			<form action="../php/desplegarartista.php">
				<input type="submit" class="enviar" value="Desplegar">
			</form>
			<h2 class="enviar2">GENEROS</h2>
			<form action="registrogenero.php">
				<input type="submit" class="enviar" value="Agregar">
			</form>
			<form action="modificargenero.php">
				<input type="submit" class="enviar" value="Modificar">
			</form>
			<form action="eliminargenero.php">
				<input type="submit" class="enviar" value="Eliminar">
			</form>
			<form action="../php/desplegargenero.php">
				<input type="submit" class="enviar" value="Desplegar">
			</form>
			<form method="post" action="../php/tabla.php">
				<input type="submit" class="enviar2" value="Mostrar Gràfico" name="export">
			</form>			
			<form method="post" action="../php/exportarCSV.php">
				<input type="submit" class="enviar2" value="Exportar CSV" name="export">
			</form>
			<form id="subida">
				<input type="file" id="csv" name="csv" class="enviar">
				<input type="submit" value="Importar CSV" class="enviar2">
				<tr id="respuesta"></tr>
			</form>	
			<form method="post" action="../php/cerrarsesion.php">
				<input type="submit" class="enviar2" value="Cerrar Sesiòn">
			</form>
		</div>	
	</div>
</body>
</html>