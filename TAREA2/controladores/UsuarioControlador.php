<?php

namespace controladores; 
use clases\Usuario; 

include_once "config/autocarga.php"; 
include_once "clases/Usuario.php"; 
class UsuarioControlador{



    public function login(int $usuario, int $password)
    {
      $usuario = new Usuario(); 

    }
}