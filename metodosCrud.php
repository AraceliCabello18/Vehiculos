<?php
class Metodos{
    public function mostrarDatos($sql){
        $c = new conectar();
        $conexion=$c->conexion();
        $result=mysqli_query($conexion,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    public function insertarDatosNombre($datos){
        $c= new conectar();
        $conexion=$c->conexion();
        $sql="INSERT into productos (marca, color, descripcion)
                            values ('$datos[0]','$datos[1]','$datos[2]')";
        return $result=mysqli_query($conexion,$sql);                    
    }
    public function eliminarDatos($id){
        $c = new conectar();
        $conexion=$c->conexion();
        $sql="DELETE from productos where id='$id'";
        return $result=mysqli_query($conexion,$sql);
    }
}
?>