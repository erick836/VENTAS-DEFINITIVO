<html>
   <body>
       <?php
	      $servidor="localhost";
		  $basedatos="basededatos";
		  $usuario="root";
		  $contrase�a="";
		  $conc=mysqli_connect($servidor,$usuario,$contrase�a,$basedatos);
		  mysqli_query($conc,"DELETE from carrito where 1");
		  mysqli_close($conc);
		  header("location:index.html");
	   ?>
   </body>
</html>