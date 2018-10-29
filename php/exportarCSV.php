<?php
	include('cn.php');
	if(isset($_POST['export']))
	{
		date_default_timezone_set("America/Mexico_City");
	    $filename = "TiendaDiscos".date('Y-m-d-h-i-sa').".csv";
			////////////////////////////////////////////////////////////////////////////////////////////////
		$f=fopen('php://output','w');

		$fields=array('IDAlbum','Nombre','IDArtista','IDGenero','Anio','Ventas','IDArtista1','Nombre1','IDGenero1','Nombre2','Descripcion');
		
		fputcsv($f,$fields);

		$selTab="SELECT * FROM TiendaMusica.Albums INNER JOIN TiendaMusica.Artista ON Albums.IDArtista = Artista.IDArtista1 INNER JOIN TiendaMusica.Genero ON Albums.IDGenero = Genero.IDGenero1";
		$r=$conexion->query($selTab);

	    while($row = mysqli_fetch_assoc($r)) 
	    {
	        fputcsv($f,$row);
	    }
		//Descarga el archivo desde el navegador
		header('Expires: 0');
		header('Cache-control: private');
		header('Content-Type: application/x-octet-stream'); // Archivo de Excel
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Content-Description: File Transfer');
		header('Last-Modified: '.date('D, d M Y H:i:s'));
		header('Content-Disposition: attachment; filename="'.$filename.'"');
		header("Content-Transfer-Encoding: binary");
		fclose($f);	
        //header ("Location: ../vistas/menu.php");   

	}
	$conexion->close();
?>
