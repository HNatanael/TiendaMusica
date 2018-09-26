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
				<td>IDARTISTA</td>
				<td>IDGENERO</td>
				<td>AÑO</td>	
			</tr>

			<?php 
			$sql="SELECT * from Albums";
			$result=mysqli_query($conexion,$sql);

			while($mostrar=mysqli_fetch_array($result)){
			 ?>
			 	<tr>
					<td><?php echo $mostrar['IDAlbum'] ?></td>
					<td><?php echo $mostrar['Nombre'] ?></td>
					<td><?php echo $mostrar['IDArtista'] ?></td>
					<td><?php echo $mostrar['IDGenero'] ?></td>
					<td><?php echo $mostrar['Anio'] ?></td>
				</tr>
		<?php 
		}
		 ?>
		</table>
		<p class="form-link"><a href="../vistas/principal.php">Regresar</a></p>	
	</div>

</body>
</html>