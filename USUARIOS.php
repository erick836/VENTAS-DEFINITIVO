<?php
  include ('validarusuario.php')
  $validar = new validarUsuario;

  $NOMBRE=$_POST['NOMBRE'];
  $CONTRASEŅA=$_POST['CONTRASEŅA'];

  $resultado=$validar-> ValidarUser ($NOMBRE, $CONTRASEŅA);

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