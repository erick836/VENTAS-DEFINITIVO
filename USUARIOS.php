<?php
  include('validarusuario.php');

  $val =new validaruser;
  
  $NOMBRE=$_POST['NOMBRE'];
  $CONTRASE�A=$_POST['CONTRASE�A'];

  $resultado=$val-> validarus($NOMBRE, $CONTRASE�A);

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