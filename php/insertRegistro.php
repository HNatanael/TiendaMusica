<?php
	include('cn.php');

        /*echo "la edad recibida es: " .$_POST['edad']. " y la fecha de nacimiento recibida es " .$_POST['fecNac']." 1. " .$_POST['id']." 2. ".$_POST['nom']." 3. ".$_POST['apeMat']." 4. ".$_POST['apePat']." 5. ".$_POST['alias']." 6. ".$_POST['sexo']." 7. ".$_POST['edad']." 8. ".$_POST['fecNac']." 9. ".$_POST['lugNac']." 10. ".$_POST['escola']." 11. ".$_POST['ocup']." 12. ".$_POST['aniosInter']." 13. ".$_POST['delito']." 14. ".$_POST['CondLegal']." 15. ".$_POST['IncDel']." 16. ".$_POST['aniosSent']." 17. ".$_POST['mesSent']." 18. ".$_POST['diasSent'].")";*/
    if($_POST)
    {
        //Inserta a Entidad Interno
        $inserInter="INSERT INTO Albums(Nombre,IDArtista,IDGenero,Anio) VALUES('".$_POST['Nombre']."','".$_POST['idArtista']."','".$_POST['idGenero']."','".$_POST['Anio']."')";


        $result = $conexion->query($inserInter);


        echo $result;

        if($result)
        {
            //Haces header o un echo si haces peticion por ajax a la ruta de la vista que accede.
            print "Bienvenido"; 
            header ("Location: ../vistas/registro.php");
        }else
        {
            //Haces header o un echo si haces peticion por ajax a la ruta de la vista de logueo nuevamente ya que no coincide el password o usuario.
            print "Error: Verificar tus datos!!!";
            //header ("Location: ../vistas/subMenuEval.php"); 
        }
    }
	//
    $conexion->close();
?>