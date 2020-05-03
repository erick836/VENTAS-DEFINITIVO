<?php
  include ('validarusuario.php')
  $validar = new validarUser;

  $NOMBRE=$_POST['NOMBRE'];
  $CONTRASEÑA=$_POST['CONTRASEÑA'];

  $resultado=$validar-> validarusuario ($NOMBRE, $CONTRASEÑA);

  var_dump($resultado);



  if($resultado->num_rows == 1)
  {
    header("location:ventas.html");
	echo "User ok";
  }
  else 
  {
  header("location:index.html");
	echo "no user ";
  
	
  }
?>