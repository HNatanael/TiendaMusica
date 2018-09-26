<!DOCTYPE html>
<html lanf="es">
<head>
	<meta charset="UTF-8">
	<title>HN Music Shop</title>
	<link rel="stylesheet" href="../css/estilosregistro.css">
</head>
<body>
	<h1>HN Music Shop</h1>
	<form action="../php/insertRegistro.php" method="post" class="form-register">
		<h2 class="form-titulo">REGRISTRA ALBUM</h2>
		<div class="contenedor-inputs">
			<input type="text" name="Nombre" placeholder="Nombre" class="input-100" required>
			<input type="number" name="idArtista" placeholder="idArtista" class="input-100" required>
			<input type="number" name="idGenero" placeholder="idGenero" class="input-100" required>
			<input type="number" name="Anio" placeholder="Año" class="input-100" required>
			<input type="submit" value="Registrar" class="enviar">
			<p class="form-link"><a href="principal.php">Regresar</a></p>
		</div>
	</form>
</body>
</html>