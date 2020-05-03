<?php
  class Conexion extends mysqli
  {
    public function __construct()
    {
      $servidor="localhost";
      $basedatos="base de datos";
      $usuario="root";
      $contraseña="";

      parent::__construct($servidor,$usuario,$contraseña,$basedatos);
      $this->query("SET NAMES 'utf8';");
      $this->connect_errno ? die("Error") : $error="Conectado a " .$basedatos;
      //echo $error;
      unset($error);
    }
  }
?>
