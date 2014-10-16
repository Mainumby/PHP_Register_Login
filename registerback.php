<?php
2	 
3	 $host_db = "SERVIDOR o IP";
4	 $user_db = "USUARIO";
5	 $pass_db = "PASSWORD";
6	  
7	 $conexion = mysql_connect($host_db, $user_db, $pass_db);
8	 
9	 mysql_select_db(NOMBRE_BD, $conexion) or die("No se puede seleccionar la base de datos.");;
10	 
11	 $buscarUsuario = "SELECT * FROM NOMBRE_TABLA WHERE CAMPO_USUARIO = '$_POST[nombre]' ";
12	 
13	 $result = mysql_query($buscarUsuario);
14	 
15	 $count = mysql_num_rows($result);
16	  
17	 if ($count == 1){
18	 echo "<br />". "El Nombre de Usuario ya Existe en nuestra Base de Datos!" . "<br />";
19	  
20	echo "<a href='registro.html'>Escoger otro Nombre de Usuario</a>";
21	  
22	exit;
23	 }
24	 else{
25	 
26	 $query = "INSERT INTO NOMBRE_TABLA (CAMPO_USUARIO, CAMPO_PASSWORD) VALUES ('$_POST[nombre]', '$_POST[password]')";
27	 
28	 if (!mysql_query($query, $conexion))
29	 {
30	 die('Error: ' . mysql_error());
31	 echo "Error al crear el usuario." . "<br />";
32	 }
33	 
34	 else{
35	 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
36	 echo "<h4>" . "Bienvenido: " . $_POST['nombre'] . "</h4>";
37	 }
38	 
39	 }
40	 
41	 mysql_close($conexion)
42	 
43	?>
- See more at: http://velozityweb.com/blog/2013/09/como-crear-un-formulario-de-registro-de-usuarios-con-php-y-mysql/#sthash.fh7gl9vZ.dpuf