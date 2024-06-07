<?php
    error_reporting(E_ALL);
    require_once 'conexion.php';
    $obj = json_decode(file_get_contents("php://input"));
    $stmt = $db->prepare("UPDATE productos set producto=?,precio = ? where id_producto = ?");
    $stmt->bind_param('sssi',$obj->producto,$obj->precio,$obj->id_producto);
    $stmt->execute();
    $stmt->close();
    echo "Registro Actualizado Correctamente!!";
    ?>