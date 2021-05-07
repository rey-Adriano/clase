<?php
include_once "config/ConexionDB.php";

class Paquete
{
    private $id;
    private $descripcion;

    public function getDescripcion()
    {
        return $this->descripcion;
    
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion=$descripcion; 
    }



    public function mostrar(){
        try {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $query = "SELECT * FROM paquete";
            $resultado = $conexion->query($query);
            $objConexion->cerrar();
        }catch (PDOException $e){
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $resultado;
    }

    public function guardar(){
        try {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $query = "INSERT  INTO paquete(descripcion) VALUES('$this->descripcion')";
            $resultado = $conexion->exec($query);
            $objConexion->cerrar();
        }catch (PDOException $e){
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $resultado;
    }
    

    public function actualizar(){
        return null;
    }

    public function eliminar(){
        return null;
    }

}