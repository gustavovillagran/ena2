<!DOCTYPE html>
<html>
<head>
<style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
   /* Sólo para centrar el formulario a la página */
    margin: 0 auto;
    width: 400px;
    /* Para ver el borde del formulario */
    padding: 1em;
    border: 5px solid #CCC;
    border-radius: 1em;
}

li a {
  display: block;
  color: ;
  padding: 8px 16px;
  text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
  background-color: #555;
  color: white;
}
.active {
  background-color: #4CAF50;
  color: white;


  li {
  border-right: 1px solid #bbb;
}

li:last-child {
  border-right: none;
}

</style>

</head>
<body >

 

  <ul>

  <br>
  <li><a href="alumnos.php">INSCRIBIR ALUMNOS </a></li>
  <br>
  <li><a href="buscarregistro.php">BUSCAR REGISTRO  </a></li>
  <br>
  <li><a href="registros.php">TODOS LOS REGISTROS DE LOS ALUMNOS</a></li>
  <br>
  <li><a href="login.php">SALIR</a></li>
  <br>

</ul>

</body>
</html>
