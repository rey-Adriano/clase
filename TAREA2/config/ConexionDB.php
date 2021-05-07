<?php

class ConexionDB{

 private $dsn ="mysql:host=localhost;dbname=proyecto"; 
 private $usuario="root";
 private $password="reyk17"; 
 public $conexion; 

    public  function abrir()
    {
    $this->conexion = new PDO($this->dsn,$this->usuario,$this->password); 
    return $this->conexion; 
    }

     public function cerrar()
    {
    $this->conexion=null; 
    }
}