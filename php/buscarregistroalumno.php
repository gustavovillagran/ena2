<!DOCTYPE html>
<html>
<head>
	<title>registro de alumnos</title>

</head>
<body>
	 <?php
	 $server = "localhost";
	 $usuario ="root";
	 $contraseña ="";
	 $bdn = "trabajonota2";

	 $conexion = mysqli_connect($server,$usuario,$contraseña,$bdn)
	 or die ("Error en la conexion");

  $cedula= $_POST['txtcedula'];

	 $consulta = mysqli_query($conexion," SELECT * FROM  alumnos where cedula ='$cedula'")
     or die ("Error al traer los datos");
     
     echo '<table border="1">';
     echo '<tr>';
     echo '<th id="cedula">cedula</th>';
     echo '<th id="nombres">nombres</th>';
     echo '<th id="apellidos">apellidos</th>';
     echo '<th id="edad">edad</th>';
     echo '<th id="fechanacimiento">fechanacimiento</th>';
     echo '<th id="pais">pais</th>';
     echo '<th id="ciudad">ciudad</th>';
     echo '<th id="provincia">provincia</th>';
     echo '<th id="telefono">telefono</th>';
     echo '<th id="direccion">direccion</th>';
     echo '<th id="sexo">sexo</th>';

    while ($extraido = mysqli_fetch_array($consulta))
    	{
           echo '<tr>';
           echo '<td>'.$extraido['cedula'].'</th>';
           echo '<td>'.$extraido['nombres'].'</th>';
           echo '<td>'.$extraido['apellidos'].'</th>';
           echo '<td>'.$extraido['edad'].'</th>';
           echo '<td>'.$extraido['fechanacimiento'].'</th>';
           echo '<td>'.$extraido['pais'].'</th>';
           echo '<td>'.$extraido['ciudad'].'</th>';
           echo '<td>'.$extraido['provincia'].'</th>';
           echo '<td>'.$extraido['telefono'].'</th>';
           echo '<td>'.$extraido['direccion'].'</th>';
           echo '<td>'.$extraido['sexo'].'</th>';
           echo '</tr>';
          }

     mysqli_close($conexion);
     echo'</table';
     ?>
</body>
 
  
</html>