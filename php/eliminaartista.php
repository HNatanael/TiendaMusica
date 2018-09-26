<?php
    include('cn.php');
  

    $quer="DELETE FROM Artista WHERE IDArtista1 = '".$_POST['IDArtista']."'";
    if($conexion->query($quer)==TRUE)
    {
               //Haces header o un echo si haces peticion por ajax a la ruta de la vista que accede.
        $mensaje = "Este usuario ha sido eliminado";
            echo "<script>";
            echo "alert('$mensaje');";  
            //echo "window.location = 'http://localhost/biopsicosocial/vistas/listaUsuarios.php';";
            echo "window.location = '../vistas/eliminarartista.php';";
            echo "</script>"; 
    }
    else{
              //Haces header o un echo si haces peticion por ajax a la ruta de la vista de logueo nuevamente ya que no coincide el password o usuario.
        //header ("Location: ../index.php"); 
        $mensaje = "No se ha podido eliminar al usuario";
            echo "<script>";
            echo "alert('$mensaje');";  
            //echo "window.location = 'http://localhost/biopsicosocial/vistas/listaUsuarios.php';";
            echo "window.location = '../vistas/eliminarartista.php';";
            echo "</script>";  
    }
    $conexion->close();
?>