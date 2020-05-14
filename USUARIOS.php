<?php
  include('validarusuario.php');

  $val =new validaruser;
  
  $NOMBRE=$_POST['NOMBRE'];
  $CONTRASEÑA=$_POST['CONTRASEÑA'];

  $resultado=$val-> validarus($NOMBRE, $CONTRASEÑA);

  var_dump($resultado);



  if($resultado->num_rows == 1)
  {
    header("location:index.html");
  }
  
  else 
  {
   header("location:ventas.php");
  } 
?>