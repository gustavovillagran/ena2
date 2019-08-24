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
	 $bdn = "RUT";

	 $conexion = mysqli_connect($server,$usuario,$contraseña,$bdn)
	 or die ("Error en la conexion");



	 $consulta = mysqli_query($conexion," SELECT * FROM  alumnos")
     or die ("Error al traer los datos");
      
     echo '<table border="1">';
     echo '<tr>';
     echo '<th id="RUT">RUT</th>';
     echo '<th id="NOMBRES">NOMBRES</th>';
     echo '<th id="APELLIDOS">APELLIDOS</th>';
     echo '<th id="EDAD">EDAD</th>';
     echo '<th id="FECHA_NACIMIENTO">FECHA_NACIMIENTO</th>';
     echo '<th id="PAIS">PAIS</th>';
     echo '<th id="CIUDAD">CIUDAD</th>';
     echo '<th id="PROVINCIA">PROVINCIA</th>';
     echo '<th id="TELEFONO">TELEFONO</th>';
     echo '<th id="DIRECCION">DIRECCION</th>';
     echo '<th id="SEXO">SEXO</th>';

    while ($extraido = mysqli_fetch_array($consulta))
    	{
           echo '<tr>';
           echo '<td>'.$extraido['RUT'].'</th>';
           echo '<td>'.$extraido['NOMBRES'].'</th>';
           echo '<td>'.$extraido['APELLIDOS'].'</th>';
           echo '<td>'.$extraido['EDAD'].'</th>';
           echo '<td>'.$extraido['FECHA_NACIMIENTO'].'</th>';
           echo '<td>'.$extraido['PAIS'].'</th>';
           echo '<td>'.$extraido['CIUDAD'].'</th>';
           echo '<td>'.$extraido['PROVINCIA'].'</th>';
           echo '<td>'.$extraido['TELEFONO'].'</th>';
           echo '<td>'.$extraido['DIRECCION'].'</th>';
           echo '<td>'.$extraido['SEXO'].'</th>';
           echo '</tr>';
          }

     mysqli_close($conexion);
     echo'</table';
     ?>
</body>
 
  
</html>