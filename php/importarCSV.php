<?php
	include('cn.php');

	if ($_FILES['csv']['size'] > 0) 
	{
		$row = 1;
    	$handle = fopen($_FILES['csv']['tmp_name'],'r');

		while ($data = fgetcsv($handle,1000,",","'"))
		{
			if($row!=1)
			//if($data[0])
			{ 
    			
    			$inserInter="INSERT INTO TiendaMusica.Albums(Nombre,IDArtista,IDGenero,Anio,Ventas) VALUES('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]')";
    			$conexion->query($inserInter);

			}
			$row++;
		}
		echo 'OK';
	}
	$conexion->close();
?>