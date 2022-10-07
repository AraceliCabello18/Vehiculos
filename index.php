<?php require_once "Conexion.php";
require_once "metodosCrud.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Crud de Examen Unidad2</title>
</head>
<body>
    <h5>Agregar Auto Requerido</h5>
<form action="procesos/insertar.php" method="post">
        <label for="">Marca</label>
        <p></p>
        <input type="text" name="txtmarca">
        <p></p>
        <label for="">Color</label>
        <p></p>
        <input type="text" name="txtcolor">
        <p></p>
        <label for="">Descripcion</label>
        <p></p>
        <input type="text" name="txtdescripcion">
        <p></p>
        <button>Agregar</button>
</form>
    <br>
    <br>
    <table style="border-collapse: collapse;" border="1">
        <tr>
            <td>Marca</td>
            <td>Color</td>
            <td>Descripcion</td>
            <td>Elininar</td>
        </tr>
        <?php
        $obj= new Metodos();
        $sql="SELECT id, marca, color, descripcion,
                from productos";
        $datos=$obj-> mostrarDatos($sql);
        foreach($datos as $key){
        ?>
        <tr>
            <td><?php echo $key['marca']; ?></td>
            <td><?php echo $key['color']; ?></td>
            <td><?php echo $key['descripcion']; ?></td>
            <td>
                <a href="procesos/eliminar.php?id=<?php echo $key['id']?>">
                Eliminar
                </a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table> 
</body>
</html>