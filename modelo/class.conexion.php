<?php
    class Conexion{
        public function get_conexion(){
            $user="postgres";
            $pass="11041996kevin";
            $host="localhost";
            $db="Pedido";
            $conexion= new PDO("pgsql:host=$host;dbname=$db;",$user,$pass);
            return $conexion;
        }
    }
    $pruebacon = new Conexion();
    
    $con = $pruebacon -> get_conexion();
    if($con){
        echo "se conecto exitosamente";
    }else{
        echo"error";
    }
?>