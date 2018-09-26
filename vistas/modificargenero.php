<!DOCTYPE html>
<html lanf="es">
<head>
	<meta charset="UTF-8">
	<title>HN Music Shop</title>
	<link rel="stylesheet" href="../css/estilosregistro.css">
</head>
<body>
	<h1>HN Music Shop</h1>
	<form action="../php/modificagenero.php" method="post" class="form-register">
		<h2 class="form-titulo">MODIFICA GENERO</h2>
		<div class="contenedor-inputs">
			<input type="number" name="idGenero" placeholder="ID" class="input-100" required>
			<input type="text" name="Nombre" placeholder="Nombre" class="input-100" required>
			<input type="text" name="Descripcion" placeholder="Descripcion" class="input-100" required>
			<input type="submit" value="Modificar" class="enviar">
			<p class="form-link"><a href="principal.php">Regresar</a></p>
		</div>
	</form>
</body>
</html>