<?php require_once '../Conexion.php';
require_once '../metodosCrud.php';

$marca=$_POST['txtmarca'];
$color=$_POST['textcolor'];
$descripcion=$_POST['txtdescripcion'];

$datos=array(
            $marca,
            $color,
            $descripcion);
$obj = new Metodos();
if ($obj->insertarDatos($datos)==1) {
    header("location:../index.php");
}else{
    echo 'fallo al agregar';
}
?>