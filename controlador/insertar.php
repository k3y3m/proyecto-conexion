<?php

requiere_once('../modelo/class.conexion.php');
requiere_once('../modelo/base.php');

$mensaje = null;

$nombre =$_POST ['nombre' ];
$descripcion =$_POST[ 'descripcion'];
$categoria =$_POST[ 'categoria'];
$precio =$_POST['precio'];

if(strlen($nombre)>0 && strlen($descripcion)>0 && strlen($categoria)>0 && strlen($precio)>0 ){
    $consulta = new Base();
    $mensaje = $consulta -> insertarProducto($nombre,$descripcion,$categoria,$precio);
    echo "<a href='../insertar.html'>Regresar</a>";
}else{
    echo" Por Favor ingrese los datos";
}
echo $mensaje;

?>