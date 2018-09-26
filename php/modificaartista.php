<?php
    include('cn.php');



    $quer="UPDATE Artista SET Nombre1 ='".$_POST['Nombre']."' WHERE IDArtista1 ='".$_POST['idArtista']."'";
    if($conexion->query($quer)==TRUE)
    {
               //Haces header o un echo si haces peticion por ajax a la ruta de la vista que accede.
        $mensaje = "Este usuario ha sido modificado";
            echo "<script>";
            echo "alert('$mensaje');";  
            //echo "window.location = 'http://localhost/biopsicosocial/vistas/listaUsuarios.php';";
            echo "window.location = '../vistas/modificarartista.php';";
            echo "</script>"; 
    }
    else{
              //Haces header o un echo si haces peticion por ajax a la ruta de la vista de logueo nuevamente ya que no coincide el password o usuario.
        //header ("Location: ../index.php"); 
        $mensaje = "No se ha podido eliminar al usuario";
            echo "<script>";
            echo "alert('$mensaje');";  
            //echo "window.location = 'http://localhost/biopsicosocial/vistas/listaUsuarios.php';";
            echo "window.location = '../vistas/modificarartistaphp';";
            echo "</script>";  
    }
    $conexion->close();
?>