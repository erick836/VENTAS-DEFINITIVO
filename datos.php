<html>
   <body>
       <?php
	      $servidor="localhost";
		  $basedatos="basededatos";
		  $usuario="root";
		  $contraseña="";
		  $conc=mysqli_connect($servidor,$usuario,$contraseña,$basedatos);
		  mysqli_query($conc,"DELETE from carrito where 1");
		  mysqli_close($conc);
		  header("location:index.html");
	   ?>
   </body>
</html>