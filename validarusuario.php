<?php
   include ('Conexion.php');
   class validarUsuario
   {
   public function ValidarUser ($user, $pass)
     {
      $us = new Conexion();
      $q= "SELECT * FROM `iusuarios` WHERE `User`='$user' AND`Password` ='$pass';";
      $usuario=$us->query($q);
      $us->close();
      return $usuario;

     }
   }
?>