<?php
   class Conexion{
       public function get_conexion(){
           $user = "postgres";
           $pass = "11041996kevin";
           $server = "localhost";
           $db = "Pedido";
           $conexion = new PDO("postgres:host = $server;dbname = $db",$user,$pass);
           return $conexion;
        }
    }
   /* $pruebacon = new Conexion();
       $con = $pruebacon -> get_conexion();
       if($con){
         echo "se conecto exitosamente";
      }else{
            echo"error";
        }*/
?>