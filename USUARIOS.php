<?php
  include ('validarusuario.php')
  $validar = new validarUser;

  $NOMBRE=$_POST['NOMBRE'];
  $CONTRASE�A=$_POST['CONTRASE�A'];

  $resultado=$validar-> validarusuario ($NOMBRE, $CONTRASE�A);

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