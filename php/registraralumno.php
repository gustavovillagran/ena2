<!DOCTYPE html>
<html>
<head>
	<title>Registrar</title>
	
</head>
<body>
	 <?php
	 $server = "localhost";
	 $usuario ="root";
	 $contraseña ="";
	 $bdn = "ena";

	 $conexion = mysqli_connect($server,$usuario,$contraseña,$bdn)
	 or die ("Error en la conexion");

	 $RUT = $_POST['txtRUT'];
	 $NOMBRES = $_POST['txtNOMBRES'];
     $APELLIDOS = $_POST['txtAPELLIDOS'];
     $EDAD = $_POST['txtEDAD'];
     $FERCHA_NACIMIENTO = $_POST['txtFECHA_NACIMIENTO'];
	 $PAIS = $_POST['txtPAIS'];
     $CIUDAD = $_POST['txtCIUDAD'];
     $PROVINCIA = $_POST['txtPROVINCIA'];
     $TELEFONO = $_POST['txtTELEFONO'];
     $DIRECCION = $_POST['txtdireccion'];
     $SEXO = $_POST['cmbSEXO'];

     $insertar = "INSERT INTO  alumnos values ('$RUT','$NOMBRES','$APELLIDOS','$EDAD','$FECHA_NACIMIENTO','$PAIS','$CIUDAD','$PROVINCIA','$TELEFONO','$DIRECCION','$SEXO')";
                           

     $resultado = mysqli_query($conexion, $insertar)
     or die ("Error al insertar los registros");

     mysqli_close($conexion);
     echo"Datos insertados correctamente";
     ?>
</body>
</html>
