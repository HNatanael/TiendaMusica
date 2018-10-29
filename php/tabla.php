<?php 
  include('cn.php');
 ?>

<html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
           ['Tìtulo', 'Unidades'],
          <?php
            $sql="SELECT * from Albums";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
              ?>
             
              ['<?php echo $mostrar['Nombre'] ?>', <?php echo $mostrar['Ventas'] ?>],

            <?php
            }
            ?>
        ]);

        var options = {
          title: 'Ventas de albums',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Ventas de albums',
                   subtitle: 'en unidades' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Ventas'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
  </script>
  <head>
    <title>REPORTES INDIVIDUALES</title>
  </head>
  <body>
<div id="top_x_div" style="width: 900px; height: 500px;"></div>
<br><br><br>
  <form method="post" action="../vistas/principal.php">
        <input type="submit" class="enviar2" value="Regresar">
  </form>
  <form method="post" action="pdftabla.php">
        <input type="submit" class="enviar2" value="Descargar tabla en pdf">
  </form>
  </body>
</html>