<!DOCTYPE html>

<html lang="en">

<head>

    <title>Registrar Usuario</title>

    <meta charset = "utf-8">

</head>

<body>

	<header>
		<h1>Registrarme:</h1>
  	</header>   
	
    <form action="registrar-usuario.php" method="post" name="procesar-usuario" enctype="multipart/form-data">   
 
  	<hr/>
 	<h3>Crea un Nombre de Usuario y Clave para tener acceso a Contenido Exclusivo!</h3>
  
  	<!--Nombre Usuario-->	
     <label for="nombre">Nombre de Usuario:</label>
     <input type="text" name="nombre" maxlength="16" /> 
     <br/><br/>
    
     <!--Password-->  
     <label for="pass">Password o Clave:</label>
     <input type="password" name="password" maxlength="8" />
      
     <br/><br/>
     <input type="submit" name="submit" value="Registrarme..." />
     <input type="reset" name="clear" value="Borrar"/>
    
    </form>

<hr />

<footer>
    &copy;2013 VelozityWeb.com
</footer>	

    </body>
</html>