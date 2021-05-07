<?php
include_once "clases/Paquete.php";

class PaqueteControlador
{
    public function mostrar(): PDOStatement{
        $curso =  new Paquete();
        return $curso->mostrar();
    }

    public function guardar($descripcion)
    {
      $paquete = new Paquete(); 
      $paquete->setDescripcion($descripcion); 
      $resultado="descripcion no guardado"; 
      if($paquete->guardar()!=0){
          $resultado="descripcion guardado"; 
      }
      return $resultado;

    }
}


