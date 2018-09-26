<?php 

	include('cn.php');

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>mostrar datos</title>
	<link rel="stylesheet" href="../css/estilosdesplegar.css">
</head>
<body>

<br>
	<div class="tabla">
		<div class="titulo">
			<h2>ALBUMS</h2>
		</div>
		<table border="1" >
			<tr>
				<td>ID</td>
				<td>NOMBRE</td>
			</tr>

			<?php 
			$sql="SELECT * from Artista";
			$result=mysqli_query($conexion,$sql);

			while($mostrar=mysqli_fetch_array($result)){
			 ?>
			 	<tr>
					<td><?php echo $mostrar['IDArtista1'] ?></td>
					<td><?php echo $mostrar['Nombre1'] ?></td>
				</tr>
		<?php 
		}
		 ?>
		</table>
		<p class="form-link"><a href="../vistas/principal.php">Regresar</a></p>	
	</div>

</body>
</html>