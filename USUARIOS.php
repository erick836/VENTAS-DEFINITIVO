<?php
  include ('validarusuario.php')
  $validar = new validarusuario;

  $NOMBRE=$_POST['NOMBRE'];
  $CONTRASEŅA=$_POST['CONTRASEŅA'];

  $resultado=$validar-> ValidarUser ($NOMBRE, $CONTRASEŅA);

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