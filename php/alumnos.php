<!DOCTYPE html>
<html>


<head>
	<title>Registrar alumno</title>
	<link rel="stylesheet" type="text/css" href="estiloalumno.css">
</head>
<body>
    <fieldset>
    <form  action="registraralumno.php" method="POST">
        <div style="width:500px; padding:3px;">
            <p>REGISTRO DE ALUMNOS</P>
      
    	 Nombres:  <label><input type="text" name="txtnombres"></label>
       
         Apellidos: <label><input type="text" name="txtapellidos"></label><br>
        <br>
        Edad:<label><input type="text" name="txtedad"></label>
        
       
        Cedula : <label><input type="text" name="txtcedula"></label><br>
        <br>
        
        Teléfono: <label><input type="text" name="txttelefono"></label>
        
       
        Dirección: <label><input type="text" name="txtdireccion"></label><br>
        <br>
        
        Fecha de Nacimiento: <label><input type="text" name="txtfechanacimiento"></label><br>
        <br>
        País: <label><input type="text" name="txtpais"></label>
        Ciudad: <label><input type="text" name="txtciudad"></label><br>
        <br>
        Provincia: <label><input type="text" name="txtprovincia"></label>
       
       
        Sexo:
        <select name="cmbsexo">
            <option value="masculino">masculino</option>
            <option value="femenino">femenino</option>
        </select><br>
        <br>

        <input type="submit" value="Registrar"   name="btnregistrar">
        <br>
        <br>
         <li><a href="menu.php">volver al menu principal</a></li>
      </div> 
    </form>
</fieldset>
<html>
<head>
    <title>Registrar alumno</title>
    <link rel="stylesheet" type="text/css" href="estiloalumno.css">
</head>
<body>
      <fieldset>
    <form  action="eliminar.php" method="POST"     >
        <p>ELIMINAR ALUMNO</P> 
     cedula: <label><input type="text" name="txtcedula"> </label><br/>
     <br>
     <br>
     <input type="submit" value="eliminar registro"   name="btneliminar">
     <br>
     <br>
    </form>
     </fieldset>
   </head>
<body>
</html>
<html>
<head>
    
    <link rel="stylesheet" type="text/css" href="estiloalumno.css">
</head>
<body>
      <fieldset>
    <form  action="actualizarinfoalumno.php" method="POST"     >
         <p>ACTUALIZAR  ALUMNO</P>
     cedula: <label><input type="text" name="txtcedula"> </label><br/>
     <br>
     <br>
     <input type="submit" value="actualizar registro"   name="btactualizar">
     <br>
     <br>
    </form>
     </fieldset>
   </head>
<body>

</html>