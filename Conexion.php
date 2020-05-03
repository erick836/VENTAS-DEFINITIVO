<?php
  class Conexion extends mysqli
  {
  public function __construct()
  {
   $Servidor="localhost";
   $basadatos="sistemadeventas";
   $usuario="root";
   $password="";

   parent :: __construct($Servidor,$usuario,$password,$basadatos);
   $this->query("SET NAMES 'utf8';");
    $this->connect_errno ? die("Error") : $error="Conectado a " .$basadatos;
    //echo $error;
    unset($error)
   }
  }
?>
