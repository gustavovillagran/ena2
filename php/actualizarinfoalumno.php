<!DOCTYPE html>
<html>
<head>
	<title>actualizar informacion del alumno</title>
	<P>ACTUALIZAR ALUMNO</P>
</head>
<body>
	<form  action="actualizar_alumno.php" method="POST">
        
     clave:<input type="text" name="txtcedula"><br/>
     nombre:<input type="text" name="txtnombres"><br/>
     apellidos:<input type="text" name="txtapellidos"><br>
     Edad:<input type="text" name="txtedad"><br>
     Fecha de Nacimiento:<input type="text" name="txtfechanacimiento"><br>
     País:<input type="text" name="txtpais"><br>
     Ciudad:<input type="text" name="txtciudad"><br>
     Provincia:<input type="text" name="txtprovincia"><br>
     Teléfono:<input type="text" name="txttelefono"><br>
     Dirección:<input type="text" name="txtdireccion"><br>
     Sexo:
        <select name="cmbsexo">
            <option value="masculino">masculino</option>
            <option value="femenino">femenino</option>
        </select><br>
 <input type="submit" value="actualizar registro"   name="btnactualizar">

    </form>

</body>
</html>
