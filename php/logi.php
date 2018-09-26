<?php 
session_start();

	
	


	$nick = $_POST['Usuario'] ;
	$_SESSION['Usuario'] = $nick;
	$pass = $_POST['Contrasenia'];
	
	

	$query = "SELECT * FROM Usuarios WHERE NombreU = '".$nick."' AND Contrasenia = '".$pass."'";

include ("cn.php");

	$res = mysqli_query($conexion,$query);
	$da = mysqli_num_rows($res);


	if($da > 0){

		
		header("location: ../vistas/principal.php");

	}else{

			$mensaje = "Usuario no registrado";
            echo "<script>";
            echo "alert('$mensaje');";  
            session_unset();
			session_destroy();
            echo "window.location = '../index.php';";
            echo "</script>";

	}
		mysqli_result($da);
		mysql_close($conexion);

		