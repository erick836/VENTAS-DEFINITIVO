<?php
  include ('validarusuario.php')
  $validar = new validarusuario;

  $NOMBRE=$_POST['NOMBRE'];
  $CONTRASEÑA=$_POST['CONTRASEÑA'];

  $resultado=$validar-> ValidarUser ($NOMBRE, $CONTRASEÑA);

  var_dump($resultado);



  if($resultado->num_rows == 1)
  {
    header("location:ventas.html");
  }
  else 
  {
    header("location:index.html");
  }
?>