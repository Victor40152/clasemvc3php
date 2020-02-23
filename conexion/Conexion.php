<?php 

class Conexion{
    public function getConexion(){
        $conexion= new mysqli("localhost", "root", "111","bdsupermercado");
        $conexion->query("SET NAMES 'UTF8'");
        return $conexion;


    }
}



?>