<?php
  class Conexion extends mysqli
  {
    public function __construct()
    {
      $servidor="localhost";
      $basedatos="basededatos";
      $usuario="root";
      $contraseņa="";

      parent::__construct($servidor,$usuario,$contraseņa,$basedatos);
      $this->query("SET NAMES 'utf8';");
      $this->connect_errno ? die("Error") : $error="Conectado a " .$basedatos;
      //echo $error;
      unset($error);
    }
  }
?>