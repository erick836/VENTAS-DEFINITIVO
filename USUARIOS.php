<?php
  include ('validarusuario.php')
  $validar = new validarUsuario;

  $NOMBRE=$_POST['NOMBRE'];
  $CONTRASE�A=$_POST['CONTRASE�A'];

  $resultado=$validar-> ValidarUser ($NOMBRE, $CONTRASE�A);

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