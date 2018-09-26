<?php
    include('cn.php');



    $quer="UPDATE Albums SET Nombre2 ='".$_POST['Nombre']."',
        Descripcion = '".$_POST['Descripcion']."' WHERE IDGenero1 ='".$_POST['idGenero']."'";
    if($conexion->query($quer)==TRUE)
    {
               //Haces header o un echo si haces peticion por ajax a la ruta de la vista que accede.
        $mensaje = "Este usuario ha sido modificado";
            echo "<script>";
            echo "alert('$mensaje');";  
            //echo "window.location = 'http://localhost/biopsicosocial/vistas/listaUsuarios.php';";
            echo "window.location = '../vistas/modificargenero.php';";
            echo "</script>"; 
    }
    else{
              //Haces header o un echo si haces peticion por ajax a la ruta de la vista de logueo nuevamente ya que no coincide el password o usuario.
        //header ("Location: ../index.php"); 
        $mensaje = "No se ha podido eliminar al usuario";
            echo "<script>";
            echo "alert('$mensaje');";  
            //echo "window.location = 'http://localhost/biopsicosocial/vistas/listaUsuarios.php';";
            echo "window.location = '../vistas/modificargenero.php';";
            echo "</script>";  
    }
    $conexion->close();
?>